<div>
    <x-slot name="header">

        <a class="btn" style="margin-left: 500px" href="http://127.0.0.1:8000/expenses/">Todos os Registros</a>
    </x-slot>


    @include('includes.message')


    <form action="" wire:submit.prevent="updateExpense">

        <p>
            <label for="">Descrição do Registro</label> <br>
            <input class="form-ipt" type="text" name="description" id="" class="shadow border-t" wire:model="description">

            @error('description')
            <h5>{{ $message }}</h5>
        @enderror
        </p>

        <p>
            <label for="">Valor do Registro</label> <br>
            <input class="form-ipt" type="number" name="amount" id="" class="shadow border-t"wire:model="amount">

            @error('amount')
            <h5>{{ $message }}</h5>
        @enderror
        </p>

        <p>
            <label for="">Tipo do Registro</label> <br>
            <select class="form-ipt" name="type" id="" class="" wire:model="type">
                <option value="" >Selecione o tipo</option>
                <option value="1">Entrada</option>
                <option value="2">Saída</option>
            </select>

            @error('type')
            <h5>{{ $message }}</h5>
        @enderror
        </p>
        <button class="btn" type="submit">Atualizar Registro</button>
    </form>
</div>

<style>
    label {
       font-size: 22px 
    }
    .btn {
        align-items: center;
        appearance: none;
        background-image: radial-gradient(100% 100% at 100% 0, #5adaff 0, #5468ff 100%);
        border: 0;
        border-radius: 6px;
        box-shadow: rgba(45, 35, 66, .4) 0 2px 4px, rgba(45, 35, 66, .3) 0 7px 13px -3px, rgba(58, 65, 111, .5) 0 -3px 0 inset;
        box-sizing: border-box;
        color: #fff;
        cursor: pointer;
        display: inline-flex;
        font-family: "JetBrains Mono", monospace;
        height: 48px;
        justify-content: center;
        line-height: 1;
        list-style: none;
        overflow: hidden;
        padding-left: 16px;
        padding-right: 16px;
        position: relative;
        text-align: left;
        text-decoration: none;
        transition: box-shadow .15s, transform .15s;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        white-space: nowrap;
        will-change: box-shadow, transform;
        font-size: 18px;
        justify-content: center;
        margin-top: 20px;
    }

    .btn:focus {
        box-shadow: #3c4fe0 0 0 0 1.5px inset, rgba(45, 35, 66, .4) 0 2px 4px, rgba(45, 35, 66, .3) 0 7px 13px -3px, #3c4fe0 0 -3px 0 inset;
    }

    .btn:hover {
        box-shadow: rgba(45, 35, 66, .4) 0 4px 8px, rgba(45, 35, 66, .3) 0 7px 13px -3px, #3c4fe0 0 -3px 0 inset;
        transform: translateY(-2px);
    }

    .btn:active {
        box-shadow: #3c4fe0 0 3px 7px inset;
        transform: translateY(2px);
    }

    input.form-ipt {
      
        height: 40px;
        width: 60%;
        font-size: 18px;
        margin-bottom: 10px;
        margin-top: 10px;
        margin-right: 80px;
        background-color: #fff;
        /* padding-left: 40px; */
        border: none;
        background-repeat: no-repeat;
        background-position: 10px;
  
    }
    select {
        background-color: transparent;
    }
</style>
