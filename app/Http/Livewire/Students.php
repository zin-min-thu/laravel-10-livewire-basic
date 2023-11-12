<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;
use Livewire\WithPagination;

class Students extends Component
{
    use WithPagination;

    public $first_name, $last_name, $email, $phone;

    public $ids;

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
            'phone' => 'required'
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
            'phone' => 'required'
        ]);

        if($this->ids) {
            $student = Student::findOrFail($this->ids);
            $student->update($validatedData);

            session()->flash('message', 'Student updated successful.');
            $this->resetInputFields();

            $this->emit('studentUpdated');
        }

    }

    public function delete($id)
    {
        if($id) {
            Student::find($id)->delete();

            session()->flash('message', 'Student deleted successful.');
        }
    }

    public function render()
    {
        $students = Student::orderBy('id', 'desc')->paginate(10);

        return view('livewire.students', [
            'students' => $students
        ]);
    }
}
