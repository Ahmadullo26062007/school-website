<div class="row">
    <div class="d-flex">
        <div class="card flex-fill">
            <div class="card-header">

                <h5 class="card-title">Certifikat qo'shish</h5>
            </div>


            <form action="{{ route('certificate.store') }}" method="post" enctype="multipart/form-data">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @csrf
                <div class="row">
                    <div class="col-6 ">
                        <div class="card-body">
                            <h5 class="card-title mb-3">O'quvchi</h5>
                            <select wire:model="student_id" class="form-select" name="student_id" id="">
                                <option  selected >O'qtuvchini tanlang</option>
                                @foreach ($students as $id => $student)
                                    <option value="{{ $id }}">{{ $student }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-6 ">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Olgan certificatlari</h5>
                            <select wire:change="updateType()" wire:model="type" class="form-select" name="type" id="">
                                <option  selected >Certificatni tanlang</option>
                                @foreach (App\Models\Student::TYPES as $id => $type)
                                    <option  value="{{ $id }}">{{ $type }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    @if ($IELTS == true)
                        <div class="col-6">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Olgan bali</h5>
                                <input wire:model="band" type="number" name="ball" class="form-control"
                                    placeholder="O'quvchini qancha olgan bali">
                            </div>
                        </div>
                    @elseif ($Cefr == true)
                        <div class="col-6">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Olgan darajasi</h5>
                                <select wire:model="degree" class="form-select" name="degree" id="">
                                    <option disabled selected>Certificatni tanlang</option>
                                    @foreach (App\Models\Student::DEGREE as $id => $type)
                                        <option  value="{{ $id }}">{{ $type }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    @elseif ($IT == true)
                    @endif
                </div>
                <button class="btn btn-primary mt-3" type="button" wire:click="createCertificate">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        <path fill-rule="evenodd"
                            d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                    </svg>
                    Yaratish
                </button>
                <a class="btn btn-secondary mt-3" href="{{ route('certificate.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                    </svg>
                    Orqaga
                </a>
            </form>
        </div>
    </div>
</div>
