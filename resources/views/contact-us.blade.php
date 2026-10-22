@extends('welcome')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <!-- /.col-md-12 -->
            @if(session()->has('success'))

                <div class="alert alert-success">
                    {{session()->get('success')}}
                </div>

            @endif

            <h1 class="text-center">Отправка сообщения</h1>
            @if(count($errors))

                <div class="alert alert-danger" role="alert">
                    @foreach($errors->all() as $error)
                        <ul>
                            <li>
                                {{$error}}
                            </li>
                        </ul>
                    @endforeach
                </div>

            @endif
            </div>
                <div class="form-group  col-md-8 offset-md-2">
                    <div class=" awsome">

                        {!! Form::open(array('method' => 'post')) !!}
                        <i class="fas fa-user name" aria-hidden="true"></i>

                        {{Form::label('Имя', ' Имя :', ['class' => 'awesome'])}}

                        <span class="star-name">*</span>
                        {{ Form::text('name', null,['class' => 'form-control','placeholder'=>'ваше имя']) }}
                        <i class="fas fa-envelope email" aria-hidden="true"></i>
                        {{Form::label('email', 'Электронная почта :', ['class' => 'awesome'])}}
                        <span class="star-email">*</span>
                        {{ Form::text('email', null, ['class' => 'form-control','placeholder'=>'ваша электронная почта']) }}
                        <i class="fa fa-phone telephone" aria-hidden="true"></i>
                        {{Form::label('Телефон', 'Телефон :', ['class' => 'awesome'])}}
                        <span class="star-telephone">*</span>
                        {{ Form::text('telephone', null, ['class' => 'form-control','placeholder'=>'ваш телефон '] ) }}


                    <div class="textarea-i">
                        <i class="fas fa-comment msg" aria-hidden="true"></i>
                        {{Form::label('Сообщение', 'Сообщение:', ['class' => 'awesome msg-label'])}}
                        {{ Form::textarea('msg', null, ['class' => 'form-control','placeholder'=>'сообщение']) }}

                        <input value="Отправить" type="submit" class="btn btn-default submit"><i class="fa fa-paper-plane send-icon" aria-hidden="true"></i> </input>

                    </div>
                    {!! Form::close() !!}
                    </div>
                </div>



        </div>

    </div>
    <!-- /.container -->


@endsection
