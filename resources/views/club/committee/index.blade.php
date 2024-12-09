
@extends('layout.dashboard')
@include('include.alerts')
@section('main')
<main>


        <div class="container-fluid px-4">
            <h2 class="mt-4">Committee Management</h2>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Committee List </li>
            </ol>

            <!-- Add Button -->
        <div class="d-flex  mb-3">
            <a href="{{ route('committee.create') }}" class="btn btn-dark rounded-pill shadow">
                <i class="fas fa-plus-circle"></i> Add Committee
            </a>
        </div>
      <!-- First Line: Single Card at the Top -->


<div class="row">
    @foreach ($committeeMembers as $committee)
        <div class="col-3 col-md-3 col-sm-12 mb-4">
            <div class="student-card text-center border rounded">
                <!-- Committee Image -->
                <img src="{{ asset($committee->image) }}" class="photo img-fluid rounded" alt="Committee Member">
                <h5>{{ $committee->name }}</h5>
                <h6>{{ $committee->position }}</h6>


                <!-- Actions Dropdown -->
                <div class="dropdown mt-2">
                    <button
                        class="btn btn-sm btn-outline-dark dropdown-toggle"
                        type="button"
                        id="actionMenu{{ $committee->id }}"
                        data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Actions
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="actionMenu{{ $committee->id }}">
                        <!-- Edit Action -->
                        @can('update user')
                            <li>
                                <a class="dropdown-item" href="{{route('committee.edit',$committee->id)}}">
                                    <i class="fa-solid fa-user-pen"></i> Edit
                                </a>
                            </li>
                        @endcan

                        <!-- Delete Action -->
                        @can('delete user')
                            <li>
                                <form action="{{route('committee.delete',$committee->id)}}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button
                                        type="submit"
                                        onclick="return confirm('Are you sure?')"
                                        class="dropdown-item text-danger">
                                        <i class="fa fa-trash"></i> Delete
                                    </button>
                                </form>
                            </li>
                        @endcan
                    </ul>
                </div>
            </div>
        </div>
    @endforeach
</div>







</section>
</main>
@endsection
<style>
    .clubhead{
        text-align: center;
        background-color: #000000;
        height: 50px;
        }
          .clubtxt{
      font-size: 36px;
      color:white;
      }
        .card-body{
          text-align: center;
          width: auto;
        }

        .circular-image {
          display: block;
          margin: auto;
          overflow: hidden;
          width: auto;
          height: 204px; /* Adjust the size as needed */
         /* Adjust the size as needed */
        }

        .card:hover {
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
          transform: scale(1.05);
        }

        .bgphoto{
          background-image:url("/model/slidebg.png");
          background-size: cover;
          background-position: center;
        }
        .bgcolor{
          background-image:linear-gradient(rgba(226, 220, 220, 0.589),#4eced3d0);

        }

        .faculty-card {
               border-radius: 24px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                overflow: hidden;
                max-width: 250px;
                width: 100%;
                transition: transform 0.3s;
                display: block;
                margin: auto;
                padding: 10px;
                border:2px double #3498db;
                height: auto;
            }

            .faculty-card:hover {
                transform: scale(1.05);
            }


            .faculty-card-content {
                padding: 20px;
            }

            .faculty-card h2 {
                margin-bottom: 10px;
                color: #333;
            }
            .faculty-card h3{
                margin-bottom: 10px;
                color: #333;
            }

            .faculty-card p {
                color: #777;
                margin-bottom: 5px;
            }

            .faculty-card a {
                text-decoration: none;
                color: #3498db;
                font-weight: bold;
            }
            h5{
                color: rgb(8, 145, 54);
            }
            h4{
              color: #463c3c;
            }
            .student-card {
            overflow: hidden;
            max-width: 250px;
            width: 100%;
            transition: transform 0.3s;
            display: block;
            margin: auto;
            padding: 10px;
        }

        .student-card:hover {
            transform: scale(1.05);
        }
            .head{
            background-color: #3498db;
         text-align: center;
            color: #fff;
            font-size: larger;
            font-family: Georgia, 'Times New Roman', Times, serif;
            border-radius: 10px;
            }
      /* Add styles for other sections as needed */
      .photo{
      height: auto;
      width: 100%;
      border-radius: 24px;
      }
      .back{
      height: 50px;
        width: 50px;
        border-radius: 100%;
      }
      .icon1{
        color: #000000;
        font-size:x-large;
        font-size: larger;

      }
      .icon1:hover{
        color: blue;
        font-size:x-large;
      }
    </style>
