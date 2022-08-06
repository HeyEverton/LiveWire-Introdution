<?php

namespace App\Http\Livewire\Expense;

use App\Models\Expense;
use Livewire\Component;

class ExpenseEdit extends Component
{
    public $amount;
    public $description;
    public $type;

    public Expense $expense;

    protected $rules = [
        'amount' => 'required',
        'type' => 'required',
        'description' => 'required|min:3',

    ];
    public function mount(/*Expense $expense*/)
    {
        $this->description = $this->expense->description;
        $this->amount      = $this->expense->amount;
        $this->type        = $this->expense->type;
    }

    public function updateExpense()
    {
        $this->validate();

      $this->expense->update([
            'description' => $this->description,
            'amount' => $this->amount,
            'type' => $this->type,
        ]);

        session()->flash('message', 'Registro atualizado com sucesso!');
    }

    public function render()
    {
        return view('livewire.expense.expense-edit');
    }
}
