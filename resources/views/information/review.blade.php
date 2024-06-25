<x-layout>
    <x-slot name="title">Testimonios - Escrubs Sitio Oficial</x-slot>


    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92"
        style="background-image: url({{ asset('storage/banners/01HZTQC6VGSSKD9WC26DRBWJ83.png') }}); opacity: 2.5; background:#fbe3d1">
        <h2 class="ltext-105 cl0 txt-center">
            Testimonios
        </h2>

	{{-- card --}}
	<livewire:card />

    {{-- component livewire comment --}}
    <livewire:comment />



</x-layout>
