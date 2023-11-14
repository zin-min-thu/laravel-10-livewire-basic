<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class Students extends Component
{
    use WithPagination;

    public $first_name, $last_name, $email, $phone;

    public $ids;

    public $search;

    protected $paginationTheme = 'bootstrap';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function resetInputFields()
    {
        $this->first_name = '';
        $this->last_name = '';
        $this->email = '';
        $this->phone = '';
    }

    public function store()
    {
        $validatedData = $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        Student::create($validatedData);

        session()->flash('message', 'Student created successful.');
        $this->resetInputFields();

        $this->emit('studentAdded');
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        $this->ids = $id;
        $this->first_name = $student->first_name;
        $this->last_name = $student->last_name;
        $this->email = $student->email;
        $this->phone = $student->phone;
    }

    public function update()
    {
        $validatedData = $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        if ($this->ids) {
            $student = Student::findOrFail($this->ids);
            $student->update($validatedData);

            session()->flash('message', 'Student updated successful.');
            $this->resetInputFields();

            $this->emit('studentUpdated');
        }

    }

    public function delete($id)
    {
        if ($id) {
            Student::find($id)->delete();

            session()->flash('message', 'Student deleted successful.');
        }
    }

    public function render()
    {
        $keyword = '%' . $this->search . '%';
        $students = Student::where('first_name', 'LIKE', $keyword)
            ->orWhere('last_name', 'LIKE', $keyword)
            ->orWhere('email', 'LIKE', $keyword)
            ->orWhere('phone', 'LIKE', $keyword)
            ->orderBy('id', 'desc')->paginate(5);

        return view('livewire.students', [
            'students' => $students,
        ]);
    }
}
