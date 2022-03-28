<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Transaction') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <body class="antialiased">

                <center>

                <br><br>

                <div id = "marginJ">
                    <label for="cars"><b>Vehicle</b></label>

                    <select name="cars" id="cars">
                        <option value="Hilux">Hilux</option>
                        <option value="	Fortuner">	Fortuner</option>
                        <option value="Vios">Vios</option>
                        <option value="Wigo">Wigo</option>
                        <option value="Innova">Innova</option>
                        <option value="Avanza">Avanza</option>
                        <option value="Hiace Commuter">Hiace Commuter</option>
                        <option value="Hiace GL Grandia">Hiace GL Grandia</option>
                        <option value="FJ-Cruiser">FJ-Cruiser</option>
                        <option value="Ranger">Ranger</option>
                        <option value="F-150">F-150</option>
                        <option value="F-150 Raptor">F-150 Raptor</option>
                        <option value="Ranger Raptor">	Ranger Raptor</option>
                        <option value="Ranger Raptor X">Ranger Raptor X</option>
                        <option value="Everest">Everest</option>
                        <option value="Territory">Territory</option>
                        <option value="Eco Sport">Eco Sport</option>
                        <option value="NP-300">	NP-300</option>
                        <option value="Navarra">Navarra</option>
                        <option value="Navarra Pro 4X">Navarra Pro 4X</option>
                        <option value="Terra">Terra</option>
                        <option value="NV-350">NV-350</option>
                        <option value="Almera 1.3L">Almera 1.3L</option>
                        <option value="Almera 1.3L">Almera 1.3L</option>
                        <option value="Montero Sport">Montero Sport</option>
                        <option value="Xpander">Xpander</option>
                        <option value="Mirage">Mirage</option>
                        <option value="Pajero">Pajero</option>
                        <option value="Colorado">Colorado</option>
                        <option value="Trialblazer">Trialblazer</option>
                        <option value="Sail">Sail</option>
                    </select><br><br>

                    <label for="cars"><b>Status</b></label>
                    
                    <select name="status" id="status">
                        <option value="Rented">Rented</option>
                        <option value="Returned">Returned</option>
                    </select><br>

                    <br>
                    -------------
                    <br><button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button><br>
                    -------------
                </div>

                <br><br>

                </center>
            
            </div>
        </div>
    </div>
</x-app-layout>
