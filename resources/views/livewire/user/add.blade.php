<div class="nk-block nk-block-lg">

    <div class="card card-preview">
        <div class="card-inner">
            <div class="preview-block">
            <form wire:submit.prevent='createNewUser' action="#" method="POST" >
                    
                   
                <div class="row gy-4">
                  
                    <div class="col-sm-2">
                        <div class="form-group">

                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="default-01" placeholder="Имя Пользователя" wire:model="userName">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">

                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="default-01" placeholder="email" wire:model="userEmail">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">

                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="default-01" placeholder="Пароль" wire:model="userPassword">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <div class="form-control-wrap">
                                <select class="form-control" wire:model="userShop">
                                <option >Магазин</option>    
                                @foreach($shops as $sh)
                                    <option value="{{$sh->id}}">{{$sh->name}}</option>
                                    
                                    @endforeach
                                </select>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <div class="form-control-wrap">
                                <select class="form-control" wire:model="userRole" >
                                    <option >Роль</option>
                                    <option value="operator">Оператор</option>
                                    <option value="butcher">Мясник</option>
                                    
                                  
                                </select>
                               
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-2">
                        <div class="form-group">

                            <div class="form-control-wrap">

                                <button class="btn btn-success" type="submit">Добавить</button>
                            </div>
                        </div>
                    </div>

                </div>
                </form>
            </div>
        </div>
    </div><!-- .card-preview -->

</div><!-- .nk-block -->