<x-filament-panels::page>
    <x-filament::card>
        <div class="border border-gray-200 rounded-md p-6 relative">
            <p class="absolute -top-3 left-4 bg-white px-2 text-sm font-semibold text-gray-600">Biodata</p>

            <div class="flex flex-col lg:flex-row items-start gap-6">
                {{-- Foto Profil --}}
                <div class="shrink-0">
                    <img src="{{ Storage::url($this->getRecord()->profile) }}" alt="Foto Profil"
                        class="w-32 h-32 object-cover rounded-md shadow">
                </div>

                {{-- Biodata + QRCode --}}
                <div class="flex-1 w-full">
                    <div class="grid grid-cols-2 md:grid-cols-2 gap-y-4 gap-x-6 text-md">
                        <div>
                            <p class="text-gray-500">Nis</p>
                            <p class="font-semibold">{{ $this->getRecord()->nis }}</p>
                        </div>
                        <div>
                            <p class="text-gray-500">Religion</p>
                            <p class="font-semibold">{{ $this->getRecord()->religion }}</p>
                        </div>
                        <div>
                            <p class="text-gray-500">Name</p>
                            <p class="font-semibold">{{ $this->getRecord()->name }}</p>
                        </div>
                        <div>
                            <p class="text-gray-500">Contact</p>
                            <p class="font-semibold">{{ $this->getRecord()->contact }}</p>
                        </div>
                        <div>
                            <p class="text-gray-500">Gender</p>
                            <p class="font-semibold">{{ $this->getRecord()->gender }}</p>
                        </div>
                        <div>
                            <p class="text-gray-500">Status</p>
                            <span class="inline-block px-3 py-1 rounded-full text-xs font-medium 
                                {{ $this->getRecord()->status === 'on' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                {{ $this->getRecord()->status }}
                            </span>
                        </div>
                        <div>
                            <p class="text-gray-500">Birthday</p>
                            <p class="font-semibold">{{ $this->getRecord()->birthday }}</p>
                        </div>
                        <div>
                            <p class="text-gray-500">QRCode</p>
                            <div id="qrcode" class="mt-1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-filament::card>

    {{-- Script QRCode --}}
    <script src="{{ asset('qrcode.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const qrcode = new QRCode(document.getElementById("qrcode"), {
                width: 100,
                height: 100,
            });

            const nis = @json($this->getRecord()->nis);
            const targetUrl = "https://docuverse.allfilldev.com/students";

            qrcode.makeCode(targetUrl);
        });
    </script>
</x-filament-panels::page>
