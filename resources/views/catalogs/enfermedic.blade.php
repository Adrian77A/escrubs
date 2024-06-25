<x-layout>
   
	<x-slot name="title"> Escrubs - Enfermedic Catalogo</x-slot>
    <!-- Catalogo AMBER 2023 INTERACTIVO -->
    <style>
        body, html {
            background-color: #e9eff4
        }
        .iframe-container {
            position: relative;
            width: 90%;
            max-width: 900px;
            height: 500px;
            margin: 0 auto;
        }

        .iframe-container iframe {
            position: absolute;
            border: none;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
        }
    </style>

	<div class="sec-banner bg0 p-t-80 p-b-50">
		<div class="container">
            <br>
            <br>
			<div class="p-b-10">
				<h3 class="ltext-103 cl5">
					Catalogo Enfermedic 2024
				</h3>
			</div>
		</div>
	</div>

    <div class="iframe-container">
        <iframe style="position:absolute;border:none;width:100%;height:100%;left:0;top:0;" src="https://online.fliphtml5.com/lhvpg/krtj/"  seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" ></iframe>   
        <a href="{{ asset('storage/catalogs/ENFERMEDIC_2024.pdf')}}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1" download>
            Descargar
        </a>
    </div>

</x-layout>