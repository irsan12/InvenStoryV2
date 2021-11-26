@extends('test')

@section('mainContent')
               <div class="flex flex-row flex-wrap flex-grow mt-2">
               <div class="w-full md:w-1/2 xl:w-1/2 p-6">
                    <!--Graph Card-->
                    <div class="bg-white border-transparent rounded-lg shadow-xl">
                        <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                            <h5 class="font-bold uppercase text-gray-600">Grafik Penjualan</h5>
                        </div>
                        <div class="p-5">
                            <canvas id="chartjs-0" class="chartjs" width="undefined" height="undefined"></canvas>
                            <script>
                                new Chart(document.getElementById("chartjs-0"), {
                                    "type": "line",
                                    "data": {
                                        "labels": ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli","Agustus","September","November","Desember"],
                                        "datasets": [{
                                            "label": "Ket",
                                            "data": [65, 59, 80, 81, 56, 55, 40,67,54,13,20,12],
                                            "fill": false,
                                            "borderColor": "rgb(75, 192, 192)",
                                            "lineTension": 0.1
                                        }]
                                    },
                                    "options": {}
                                });
                            </script>
                        </div>
                    </div>
                </div>
                    <!--/Graph Card-->
               
<br>
               
               <div class="w-full md:w-1/2 xl:w-1/2 p-6">
                    <!--Table Card-->
                    <div class="bg-white border-transparent rounded-lg shadow-xl overflow-y-auto h-2/4">
                        <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                            <h5 class="font-bold uppercase text-gray-600">Tabel Transaksi</h5>
                        </div>
                        <div class="p-5">
                            <table class="w-full p-5 text-gray-700">
                                <thead>
                                    <tr>
                                        <th class="text-left text-blue-900">Name</th>
                                        <th class="text-left text-blue-900">Side</th>
                                        <th class="text-left text-blue-900">Role</th>
                                    </tr>
                                </thead>

                                <tbody>
                                	@for ($i = 0; $i < 10; $i++)
   
                                    <tr>
                                        <td>Obi Wan Kenobi {{$i}}</td>
                                        <td>Light</td>
                                        <td>Jedi</td>
                                    </tr>
                                    <tr>
                                        <td>Greedo {{$i}}</td>
                                        <td>South</td>
                                        <td>Scumbag</td>
                                    </tr>
                                    <tr>
                                        <td>Darth Vader {{$i}}</td>
                                        <td>Dark</td>
                                        <td>Sith</td>
                                    </tr>
									@endfor
                                </tbody>
                            </table>

                            <p class="py-2"><a href="#">See More issues...</a></p>

                        </div>
                    </div>
                    <!--/table Card-->
                </div>
            </div>
@endsection