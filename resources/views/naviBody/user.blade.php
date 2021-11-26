 @extends('test')

@section('mainContent')
<div class="w-full md:w-1/2 xl:w-1/2 p-6">
                    <!--Table Card-->
                    <div class="bg-white border-transparent rounded-lg shadow-xl overflow-y-auto h-2/4">
                        <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                            <h5 class="font-bold uppercase text-gray-600">Data User</h5>
                        </div>
                        <div class="p-5">
                            <table class="w-full p-5 text-gray-700">
                                <thead>
                                    <tr>
                                        <th class="text-left text-blue-900">Nama</th>
                                        <th class="text-left text-blue-900">Username</th>
                                        <th class="text-left text-blue-900">Status</th>
                                    </tr>
                                </thead>

                                <tbody>
                                	<?php foreach ($user as $dataUser): ?>
    									<tr>
     									 	<td>{{$dataUser->name}}</td>
      										<td>{{$dataUser->username}}</td>
     										<td>{{$dataUser->role}}</td>
    									</tr>
    					 			<?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--/table Card-->
                </div>
@endsection