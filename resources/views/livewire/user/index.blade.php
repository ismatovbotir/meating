<div class="nk-block nk-block-lg">

    <div class="card card-preview">
        <div class="card-inner">
            <div class="preview-block">
            <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">email</th>
        <th scope="col">role</th>
        <th scope="col">shop</th>
        
      </tr>
    </thead>
    <tbody>
      @foreach($users as $idx=>$user)
        <tr>
        <th scope="row">{{$idx+1}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->role}}</td>
        <td>{{$user->shop}}</td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
  
               
            </div>
        </div>
    </div><!-- .card-preview -->

</div><!-- .nk-block -->