<div class="nk-block nk-block-lg">

    <div class="card card-preview">
        <div class="card-inner">
            <div class="preview-block">
            <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Users</th>
        <th scope="col">total</th>
        
      </tr>
    </thead>
    <tbody>
      @foreach($shops as $idx=>$shop)
        <tr>
        <th scope="row">{{$idx+1}}</th>
        <td>{{$shop->name}}</td>
        <td>{{$shop->users_count}}</td>
        <td>5 000</td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
  
               
            </div>
        </div>
    </div><!-- .card-preview -->

</div><!-- .nk-block -->