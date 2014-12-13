<!-- app/views/opts/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ExperTrees</title>

    <!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"> -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/sb-admin.css" rel="stylesheet">
    <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="../../public">ExperTrees</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="../clons">Klon/Varietas</a></li>
            <li class="active"><a href="../opts">OPT</a></li>
            <li><a href="../fertils">Pemupukan</a></li>
            <li><a href="../irigations">Irigasi</a></li>
        </ul>
    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Organisme Pengganggu Tanaman
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="../../public">Beranda</a>
                        </li>
                        <li>
                            <a href="../opts">OPT</a>
                        </li>
                        <li class="active">
                            Tambah OPT
                        </li>
                    </ol>
                </div>
            </div>
            <div class="col-lg-4">
                {{ HTML::ul($errors->all() )}}

    			{{ Form::open(array('url' => 'opts')) }}

        			<div class="form-group">
        				{{ Form::label('name', 'Nama') }}
        				{{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
        			</div>

                    <div class="form-group">
                        {{ Form::label('type', 'Jenis') }}
                        {{ Form::select('type', array('hama' => 'hama', 'penyakit' => 'penyakit', 'gulma' => 'gulma'),
                           Input::old('type'), array('class' => 'form-control')) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('cause', 'Penyebab') }}
                        {{ Form::text('cause', Input::old('cause'), array('class' => 'form-control')) }}
                    </div>

        			{{ Form::submit('Simpan', array('class' => 'btn btn-primary')) }}

    			{{ Form::close() }}
            </div>
        </div>        
    </div>
</body>
</html>