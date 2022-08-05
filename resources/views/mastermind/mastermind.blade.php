
<x-layout>
	<h1>M A S T E R M I N D</h1>

	<div class=" grid grid-cols-3 gap-4 place-content-center bg-gray-400">
		<div class="border-collapse border border-slate-500"> 
			<h3 class="text-center">Score</h3>
			<br>
			<h3 class="text-center">Timer</h3>
			<div class="countdown text-center">
				<span id="time" class="time text-center">00:00:00</span>
			</div>
		</div>
		<table class="table-auto border-collapse border border-slate-500">
			<tr>
				<th class="border border-slate-600">Column 1</th>
				<th class="border border-slate-600">Column 2</th>
				<th class="border border-slate-600">Column 3</th>
				<th class="border border-slate-600">Column 4</th>
				<th class="border border-slate-600">Correct Placement</th>
				<th class="border border-slate-600">Correct Colors</th>
			</tr>
			<tr>
				<td class="border border-slate-700" id="row1col1">1</td>
				<td class="border border-slate-700" id="row1col2">2</td>
				<td class="border border-slate-700" id="row1col3">3</td>
				<td class="border border-slate-700" id="row1col4">4</td>
				<td class="border border-slate-700" id="row1col5">...</td>
				<td class="border border-slate-700" id="row1col6">...</td>
			</tr>
			<tr>
				<td class="border border-slate-700" id="row2col1">1</td>
				<td class="border border-slate-700" id="row2col2">2</td>
				<td class="border border-slate-700" id="row2col3">3</td>
				<td class="border border-slate-700" id="row2col4">4</td>
				<td class="border border-slate-700" id="row2col5">...</td>
				<td class="border border-slate-700" id="row2col6">...</td>
			</tr>
			<tr>
				<td class="border border-slate-700" id="row3col1">1</td>
				<td class="border border-slate-700" id="row3col2">2</td>
				<td class="border border-slate-700" id="row3col3">3</td>
				<td class="border border-slate-700" id="row3col4">4</td>
				<td class="border border-slate-700" id="row3col5">...</td>
				<td class="border border-slate-700" id="row3col6">...</td>
			</tr>
			<tr>
				<td class="border border-slate-700" id="row4col1">1</td>
				<td class="border border-slate-700" id="row4col2">2</td>
				<td class="border border-slate-700" id="row4col3">3</td>
				<td class="border border-slate-700" id="row4col4">4</td>
				<td class="border border-slate-700" id="row4col5">...</td>
				<td class="border border-slate-700" id="row4col6">...</td>
			</tr>
			<tr>
				<td class="border border-slate-700" id="row5col1">1</td>
				<td class="border border-slate-700" id="row5col2">2</td>
				<td class="border border-slate-700" id="row5col3">3</td>
				<td class="border border-slate-700" id="row5col4">4</td>
				<td class="border border-slate-700" id="row5col5">...</td>
				<td class="border border-slate-700" id="row5col6">...</td>
			</tr>
			<tr>
				<td class="border border-slate-700" id="row6col1">1</td>
				<td class="border border-slate-700" id="row6col2">2</td>
				<td class="border border-slate-700" id="row6col3">3</td>
				<td class="border border-slate-700" id="row6col4">4</td>
				<td class="border border-slate-700" id="row6col5">...</td>
				<td class="border border-slate-700" id="row6col6">...</td>
			</tr>
			<tr>
				<td class="border border-slate-700" id="row7col1">1</td>
				<td class="border border-slate-700" id="row7col2">2</td>
				<td class="border border-slate-700" id="row7col3">3</td>
				<td class="border border-slate-700" id="row7col4">4</td>
				<td class="border border-slate-700" id="row7col5">...</td>
				<td class="border border-slate-700" id="row7col6">...</td>
			</tr>
			<tr>
				<td class="border border-slate-700" id="row8col1">1</td>
				<td class="border border-slate-700" id="row8col2">2</td>
				<td class="border border-slate-700" id="row8col3">3</td>
				<td class="border border-slate-700" id="row8col4">4</td>
				<td class="border border-slate-700" id="row8col5">...</td>
				<td class="border border-slate-700" id="row8col6">...</td>
			</tr>
			<tr>
				<td class="border border-slate-700" id="row9col1">1</td>
				<td class="border border-slate-700" id="row9col2">2</td>
				<td class="border border-slate-700" id="row9col3">3</td>
				<td class="border border-slate-700" id="row9col4">4</td>
				<td class="border border-slate-700" id="row9col5">...</td>
				<td class="border border-slate-700" id="row9col6">...</td>
			</tr>
			<tr>
				<td class="border border-slate-700" id="row10col1">1</td>
				<td class="border border-slate-700" id="row10col2">2</td>
				<td class="border border-slate-700" id="row10col3">3</td>
				<td class="border border-slate-700" id="row10col4">4</td>
				<td class="border border-slate-700" id="row10col5">...</td>
				<td class="border border-slate-700" id="row10col6">...</td>
			</tr>
		</table>
		<div class="border-collapse border border-slate-500"> 
			<table class="table-auto border-collapse border border-slate-500 px-12 py-12 m-auto">
				<tr>
					<td class="border border-slate-700 px-12 py-12" id="answerrow1">1</td>
					<td class="border border-slate-700 px-12 py-12" id="answerrow2">2</td>
					<td class="border border-slate-700 px-12 py-12" id="answerrow3">3</td>
					<td class="border border-slate-700 px-12 py-12" id="answerrow4">4</td>
					
				</tr>


			</table>

		</div>
	</div>


	<div class=" grid grid-cols-3 gap-4 place-content-center bg-gray-500">
		<div style="overflow-y:auto">
		</div>
		<div class="text-center py-2 px-2">
			<button class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded" onclick="submitGuess()">Submit</button><br>
		</div>
		<div></div>
	</div>

<style>
	.mv-button-style{

	}
</style>

	<div class="grid grid-cols-3 gap-4 bg-gray-400 py-12 px-12">
		<div></div>
		<div class="grid grid-cols-4 gap-4 rounded">
			<div class="border-collapse border border-slate-500 rounded">
				<button class="bg-gray-100 hover:bg-gray-200 text-black font-bold w-full py-1 rounded"  onclick="col1Select('white')">White</button><br>
				<button class="bg-gray-800 hover:bg-gray-700 text-white font-bold w-full py-1 rounded"  onclick="col1Select('black')">Black </button><br>
				<button class="bg-red-400 hover:bg-red-500 text-white font-bold w-full py-1 rounded"    onclick="col1Select('red')">Red   </button><br>
				<button class="bg-blue-400 hover:bg-blue-500 text-white font-bold w-full py-1 rounded"    onclick="col1Select('blue')">Blue  </button><br>
				<button class="bg-green-400 hover:bg-green-500 text-white font-bold w-full py-1 rounded"  onclick="col1Select('green')">Green </button><br>
				<button class="bg-yellow-400 hover:bg-green-500 text-white font-bold w-full py-1 rounded" onclick="col1Select('yellow')">Yellow</button><br>
			</div>

			<div class="border-collapse border border-slate-500 rounded">
				<button class="bg-gray-100 hover:bg-gray-200 text-black font-bold w-full py-1 rounded"  onclick="col2Select('white')">White </button><br>
				<button class="bg-gray-800 hover:bg-gray-700 text-white font-bold w-full py-1 rounded"  onclick="col2Select('black')">Black </button><br>
				<button class="bg-red-400 hover:bg-red-500 text-white font-bold w-full py-1 rounded"    onclick="col2Select('red')">Red   </button><br>
				<button class="bg-blue-400 hover:bg-blue-500 text-white font-bold w-full py-1 rounded"    onclick="col2Select('blue')">Blue  </button><br>
				<button class="bg-green-400 hover:bg-green-500 text-white font-bold w-full py-1 rounded"  onclick="col2Select('green')">Green </button><br>
				<button class="bg-yellow-400 hover:bg-green-500 text-white font-bold w-full py-1 rounded" onclick="col2Select('yellow')">Yellow</button><br>
			</div>

			<div class="border-collapse border border-slate-500 rounded">
				<button class="bg-gray-100 hover:bg-gray-200 text-black font-bold w-full py-1 rounded"  onclick="col3Select('white')">White </button><br>
				<button class="bg-gray-800 hover:bg-gray-700 text-white font-bold w-full py-1 rounded"  onclick="col3Select('black')">Black </button><br>
				<button class="bg-red-400 hover:bg-red-500 text-white font-bold w-full py-1 rounded"    onclick="col3Select('red')">Red   </button><br>
				<button class="bg-blue-400 hover:bg-blue-500 text-white font-bold w-full py-1 rounded"    onclick="col3Select('blue')">Blue  </button><br>
				<button class="bg-green-400 hover:bg-green-500 text-white font-bold w-full py-1 rounded"  onclick="col3Select('green')">Green </button><br>
				<button class="bg-yellow-400 hover:bg-green-500 text-white font-bold w-full py-1 rounded" onclick="col3Select('yellow')">Yellow</button><br>
			</div>

			<div class="border-collapse border border-slate-500 rounded">
				<button class="bg-gray-100 hover:bg-gray-200 text-black font-bold w-full py-1 rounded"  onclick="col4Select('white')">White </button><br>
				<button class="bg-gray-800 hover:bg-gray-700 text-white font-bold w-full py-1 rounded"  onclick="col4Select('black')">Black </button><br>
				<button class="bg-red-400 hover:bg-red-500 text-white font-bold w-full py-1 rounded"    onclick="col4Select('red')">Red   </button><br>
				<button class="bg-blue-400 hover:bg-blue-500 text-white font-bold w-full py-1 rounded"    onclick="col4Select('blue')">Blue  </button><br>
				<button class="bg-green-400 hover:bg-green-500 text-white font-bold w-full py-1 rounded"  onclick="col4Select('green')">Green </button><br>
				<button class="bg-yellow-400 hover:bg-green-500 text-white font-bold w-full py-1 rounded" onclick="col4Select('yellow')">Yellow</button><br>
			</div>
		</div>
		<div></div>
	
	</div>
	
	<div class=" grid grid-cols-3 gap-4 place-content-center bg-gray-500">
		<div></div>
		<div class="text-center py-2 px-2">
			<button class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded" onclick="startNewGame()">New Game </button>
			<button class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded" onclick="failTheGame()">Fail Game </button> 
		</div>
		<div></div>
	</div>

<br>

</x-layout>

<script type="text/javascript" src="app.js"></script>