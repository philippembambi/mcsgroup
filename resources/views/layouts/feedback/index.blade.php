@extends('layouts.app', ['title' => "Mcs Groupe - Feedback"])

@section('content')
<div id="page">
    @component('components.fixed-header')
    @endcomponent

    <div class="sub_header_in">

        <br>
        </div>
	<main>
		<!-- /map -->
		<div class="container margin_60_35">
			<div class="row justify-content-center">

                <div class="col-xl-5 col-lg-6 pl-xl-5">
					<div class="box_contacts">
						<i class="ti-support"></i>
						<h2>Besoin d'un Service ?</h2>
						<a href="#">Decrivez-le</a> <a href="#">Ici</a>
					</div>
					<div class="box_contacts">
						<i class="ti-help-alt"></i>
						<h2>Des questions ?</h2>
						<a href="#0">Posez-les</a>  <a href="#">Ici</a>
					</div>
				</div>

				<div class="col-xl-5 col-lg-6 pr-xl-5">
					<div class="main_title_3">
						<span></span>
						<h2>Ecrivez-nous</h2>
						<p>Pour tout autre besoin, veillez l'exprimer ici.</p>
					</div>
					<div id="message-contact"></div>
					<form method="post" action="{{ route('feedback.post') }}" id="contactform" autocomplete="off">
                        @csrf
                        <div class="form-group">
							<label>Objet</label>
							<input class="form-control" type="text" id="objet" name="objet">
						</div>
						<div class="form-group">
							<label>Service</label>
                            <select name="service" id="" class="form-control">
                                <option value="autre" selected>Autre</option>
                                <option value="community_management">Accompagnement numérique</option>
                                <option value="audiovisuel">Production audio-visuel</option>
                            </select>
                        </div>
						<!-- /row -->
						<div class="form-group">
							<label>Description</label>
							<textarea class="form-control" id="content" name="content" style="height:120px;"></textarea>
						</div>
						<p class="add_top_30"><input type="submit" value="Envoyer" class="btn_1" id="submit-contact"></p>
					</form>
				</div>

			</div>
		</div>
		<!-- /container -->
	</main>
	<!--/main-->

</div>

@component('components.footer')
@endcomponent
@endsection
