@extends('layouts.app')

@section('titulo')
	Cadastro
@endsection

@section('conteudo')
	<div class="container-login100">
		<div class="wrap-login100 p-t-90 p-b-30"  style="width: 640px" >
		<form id="form" class="login100-form validate-form" method="post" action="{{ url('/usuarios/cadastrar') }}">
				{{ csrf_field() }}
				<span class="login100-form-title p-b-40">
					Veículos
				</span>

				<div class="text-center p-t-25 p-b-30">
					<span class="txt1">
						Cadastrar Veículo(s)
					</span>
				</div>

				<div class="row">
					<div class="col-sm">
							<div class="wrap-input100 m-b-16" data-validate="">
									<input class="input100" type="text" name="nmPlacaVeiculo" placeholder="Placa">
									<span class="focus-input100"></span>
							</div>
					</div>
					<div class="col-sm">
							<div class="wrap-input100  m-b-16" data-validate="">
									<input class="input100" type="text" name="dsConsumoVeiculo" placeholder="Consumo - km/l">
									<span class="focus-input100"></span>
							</div>
					</div>
					
				</div>

				<div class="row">
						<div class="col-sm">
								<div class="wrap-input100  m-b-16" data-validate="">
										<!-- <input class="input100" type="combobox" name="idMarca" placeholder="Marca"> -->
										<select name="" id="" class="input100" style="border: none; outline: 0px;">
											<option style="border: none; outline: 0px;" value="1" >Marca 1</option>
											<option value="1" >Marca 1</option>
											<option value="1" >Marca 1</option>
											<option value="1" >Marca 1</option>
										</select>
										<span class="focus-input100"></span>
								</div>
						</div>
						<div class="col-sm">
								<div class="wrap-input100  m-b-16" data-validate="">
										<input class="input100" type="text" name="idModelo" placeholder="Modelo">
										<span class="focus-input100"></span>
								</div>
						</div>
						<div class="col-sm">
								<div class="wrap-input100  m-b-16" data-validate="">
										<input class="input100" type="text" name="anoVeiculo" placeholder="Ano">
										<span class="focus-input100"></span>
								</div>
						</div>
				</div>
				

				<div class="container-login100-form-btn">
					<button type="button" class="login100-form-btn" onclick="valida()">
						Proximo Passo
					</button>
				</div>

			</form>
		</div>
	</div>

	

@endsection

@section('importacoes')
	<script src="../js/veiculo/veiculo.js"></script>
@endsection