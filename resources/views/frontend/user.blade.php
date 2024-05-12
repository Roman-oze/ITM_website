<div class="container">

    <div class="table-responsive">
      <table
          class="table table-primary">
          <thead>
              <tr>
                  <th>Admin ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>mobile</th>
                  <th>Password</th>
              </tr>
          </thead>
          <tbody>
   @foreach ($admins as $admin)

   @endforeach
              <tr>
                  <td>{{$admin->admin_id}}</td>
                  <td>{{$admin->name}}</td>
                  <td>{{$admin->eamil}}</td>
                  <td>{{$admin->mobile}}</td>
                  <td>{{$admin->password}}</td>

                  <td>

                      <a href="{{route('data')}}" class="btn btn-info">Edit</a>
                      <a href="{{route('data')}}" class="btn btn-danger">Delet</a>
                      <a href="{{route('data')}}" class="btn btn-success">Show</a>
                  </td>

              </tr>

          </tbody>

      </table>
    </div>

