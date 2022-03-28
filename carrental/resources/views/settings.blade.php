<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Settings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <body class="antialiased">

                <center>
                <table>
                    <tr>
                        <td style="width:500px">
                        <center>

                            <div id = "marginJ">
                                <br><br>
                                <b>Add new vehicle</b>
                                <form method="POST" action="/register">
                                    {{ csrf_field() }}
                                    <br>
                                    <div class="form-group">
                                        <label for="name">Make</label><br>
                                        <input type="text" id="make" name="name">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="email">Model</label><br>
                                        <input type="text" id="model" name="email">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="password">Plate</label><br>
                                        <input type="text" id="plate" name="password">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        -------------
                                        <br><button style="cursor:pointer" type="submit" id="add" class="btn btn-primary">Add</button><br>
                                        -------------
                                    </div>
                                </form>  
                            </div>
                        <center>
                        </td>

                        <td style="width:500px">
                        <center>
                        
                            <div id = "marginJ">
                                <br><br>
                                <b>Remove a vehicle</b>
                                <form method="POST" action="/register">
                                    {{ csrf_field() }}
                                    <br>
                                    <div class="form-group">
                                        <label for="name">Make</label><br>
                                        <input type="text" id="make" name="name">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="email">Model</label><br>
                                        <input type="text" id="model" name="email">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="password">Plate</label><br>
                                        <input type="text" id="plate" name="password">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        -------------
                                        <br><button style="cursor:pointer" type="submit" id="remove" class="btn btn-primary">Remove</button><br>
                                        -------------
                                    </div>
                                </form>  
                            </div>

                        </center>
                        </td>
                    </tr>
                </table>
                </center><br><br>
            </div>
        </div>
    </div>
</x-app-layout>
