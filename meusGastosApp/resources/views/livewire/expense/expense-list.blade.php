<div>
    <x-slot name="header" class="navArea">

        <a class="btn" href="http://127.0.0.1:8000/expenses/create">Criar novo Registro </a>
    </x-slot>

    @include('includes.message')

    <table class="customers">
        <thead>
            <tr>
                <th>#</th>
                <th>Descrição</th>
                <th>Valor</th>
                <th>Data Registro</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($expenses as $exp)
                <tr>
                    <td>{{ $exp->id }}</td>
                    <td>{{ $exp->description }}</td>
                    <td>{{ $exp->amount }}</td>
                    <td>{{ $exp->created_at->format('d/m/Y H:i:s') }}</td>
                    <td>
                        <a class="btn" href="{{ route('expenses.edit', $exp->id) }}">Editar</a>
                        <a class="btn" href="#"wire:click.prevent="remove({{ $exp->id }})">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $expenses->links() }}
</div>
<style>
    .customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    .customers td,
    .customers th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    .customers tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .customers tr:hover {
        background-color: #ddd;
    }

    .customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-image: radial-gradient(100% 100% at 100% 0, #5adaff 0, #5468ff 100%);
        color: white;
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
        justify-content: flex-end;
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

    .navArea {
        display: flex;
    }
</style>
