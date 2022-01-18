<section class="contact" id="forcontact">
    <div class="container">

        <form action="{{ route('index') }}" method="POST">
            <div class="col ">

                    <h1>  contactez-nous</h1>
                
                    <div class="row ">
                            <div class="col-md-4 ms-auto">
                                <div class=" mb-3">
                                    <input type="text" class="form-control shadow-none rounded-0" placeholder="Noms & Prenoms" aria-label="Username" aria-describedby="basic-addon1">
                                </div>

                            </div>
                            <div class="col-md-4 me-auto">

                                <div class=" mb-4">
                                    <input type="text" class="form-control shadow-none rounded-0" placeholder="Adresse e-mail" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                    </div>

                    <div class="col-md-8 ms-auto me-auto">
                        <div class=" mb-3">
                            <input type="email" class="form-control shadow-none" id="exampleFormControlInput1" placeholder="Objet">
                        </div>
                    </div>

                    <div class="col-md-8 ms-auto me-auto">
                        <div class="input-group">
                            <textarea class="form-control shadow-none" rows="8" aria-label="With textarea" placeholder="Votre message ici"></textarea>
                        </div>
                    </div>
                    
                <div class="modal-footer border-0  border-0 ">
                 <input type="submit" class="btn w-50 btn-primary ms-auto me-auto border-0 rounded-0 shadow-none " >
              </div>
            </div>
        </form>
       
    </div>
</section>