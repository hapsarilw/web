@extends('base')
@section('content')

    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Data Pengguna dan Karyawan</h1>
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <hr>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Tipe Pengguna</th>
                    <th>Dibuat Tanggal</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($data as $datas)

                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $datas->name }}</td>
                        <td>{{ $datas->email }}</td>
                        <td>@php
                                echo App\Http\Controllers\User::displayPegawai($datas->is_admin);
                            @endphp
                        </td>
                        <td>{{ $datas->created_at }}</td>
                        <td>
                            @if($datas->is_admin!="0")
                                <form action="{{ route('user.destroy', $datas->id) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <a href="{{ route('user.edit',$datas->id) }}" class=" btn btn-sm btn-primary">Edit</a>
                                    <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                                </form>
                            @else

                            @endif

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
    < <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.25/vue.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/live/3.0/firebase.js"></script>

    <script>
        // Initialize Firebase
        var config = {
            apiKey: "{{ config('services.firebase.api_key') }}",
            authDomain: "{{ config('services.firebase.auth_domain') }}",
            databaseURL: "{{ config('services.firebase.database_url') }}",
            storageBucket: "{{ config('services.firebase.storage_bucket') }}",
        };
        firebase.initializeApp(config);

        new Vue({
            el: 'body',

            data: {
                task: '',
                todos: []
            },

            ready: function() {
                var self = this;

                // Initialize firebase realtime database.
                firebase.database().ref('todos/').on('value', function(snapshot) {
                    // Everytime the Firebase data changes, update the todos array.
                    self.$set('todos', snapshot.val());
                });
            },

            methods: {

                /**
                 * Create a new todo and synchronize it with Firebase
                 */
                createTodo: function() {
                    var self = this;

                    // For the sake of simplicity, I'm using jQuery here
                    $.post('/todo', {
                        _token: '{!! csrf_token() !!}',
                        task: self.task,
                        is_done: false
                    });

                    this.task = '';
                }
            }
        });
    </script>
@endsection