<div>

    <!-- Content page -->
    <section class="bg0 p-t-104 p-b-116">
        <div class="container">
            <div class="flex-w flex-tr">
                <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                    <form>
                        @if ($bandera)
                            <h4 class="mtext-105 cl2 txt-center p-b-30" style="color: #6a0000;">
                                ¡¡ Gracias por tu comentario !!
                            </h4>
                        @else
                            <h4 class="mtext-105 cl2 txt-center p-b-30" style="color: #6a0000;">
                                Envia un Testimonio
                            </h4>
                        @endif

                        <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" name="name" maxlength="200"
                            placeholder="Nombre completo ..."  id="name" wire:model="name" type="text" >
                            @error('name')
                                <span class="text-red-500 text-xs italic">{{ $message }}</span>
                            @enderror
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email"
                                placeholder="Correo" id="email" wire:model="email" maxlength="50">
                            <img class="how-pos4 pointer-none" src="{{ asset('storage/images/icons/icon-email.png') }}"
                                alt="ICON">
                            @error('email')
                                <span class="text-red-500 text-xs italic">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="bor8 m-b-30">
                            <textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="description"  id="description" wire:model="description" placeholder="¿Comentanos tu opinión?" maxlength="200"></textarea>
                            @error('description')
                                <span class="text-red-500 text-xs italic">{{ $message }}</span>
                            @enderror
                        </div>
                        <button wire:click="store()" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                            Enviar
                        </button>
                    </form>
                </div>
                <div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
                    <div class="flex-w w-full p-b-42">
                        <span class="fs-18 cl5 txt-center size-211">
                            <span class="lnr lnr-phone-handset"></span>
                        </span>
                        <div class="size-212 p-t-2">
                            <span class="mtext-110 cl2">
                                Telefono
                            </span>

                            <p class="stext-115 cl1 size-213 p-t-18">
                                +1 800 1236879
                            </p>
                        </div>
                    </div>
                    <div class="flex-w w-full">
                        <span class="fs-18 cl5 txt-center size-211">
                            <span class="lnr lnr-envelope"></span>
                        </span>
                        <div class="size-212 p-t-2">
                            <span class="mtext-110 cl2">
                                Email de contacto
                            </span>

                            <p class="stext-115 cl1 size-213 p-t-18">
                                admin@escrubs.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
