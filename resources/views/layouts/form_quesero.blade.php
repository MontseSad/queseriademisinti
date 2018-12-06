<div class="panel-content">
        <form >
            <div class="form-group">
                {!! Form::label('name', 'Nombres') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'required'=>'required']) !!}
                <!--label>Nombre del producto</label>
                <input type="text" id="nombre" class="form-control" required-->
            </div>
            <div class="form-group">
                    {!! Form::label('lastname', 'Apellidos') !!}
                    {!! Form::text('lastname', null, ['class' => 'form-control', 'required'=>'required']) !!}
                    <!--label>Nombre del producto</label>
                    <input type="text" id="nombre" class="form-control" required-->
                </div>
            <div class="form-group">
                {!! Form::label('birth', 'Fecha de nacimiento') !!}
                {!! Form::date('birth', null, ['class'=> 'form-control', 'required'=>'required']) !!}
                <!--label>Coste de producción</label>
                <input type="number" name="coste_in" class="form-control price"  required-->
                <!--span class="help-block">999.99</span-->
            </div>
            <div class="form-group">
                {!! Form::label('email', 'Correo electrónico') !!}
                {!! Form::email('email', null, ['class'=> 'form-control', 'required'=>'required']) !!}
                <!--label>Coste de venta</label>
                <input name="coste_out" type="number" class="form-control price"  required-->
                <span class="help-block">algo@example.com</span>
            </div>
            <div class="form-group">
                {!! Form::label('password', 'Contraseña') !!}
                {!! Form::password('password', ['class'=> 'form-control', 'required'=>'required']) !!}
                <!--label>Receta</label>
                <textarea class="form-control" rows="5" cols="30"  required></textarea-->
            </div>
            <div class="form-group">
                {!! Form::label('r_password', 'Repetir contraseña') !!}
                {!! Form::password('r_password',  ['class'=> 'form-control', 'required'=>'required']) !!}
                <!--label>Receta</label>
                <textarea class="form-control" rows="5" cols="30"  required></textarea-->
            </div>
            <div class="form-group">
                {!! Form::label('curp', 'curp') !!}
                {!! Form::text('curp', null, ['class'=> 'form-control', 'required'=>'required']) !!}
                <!--label>Descripción</label>
                <textarea class="form-control" rows="2" cols="30" ></textarea-->
            </div>
            {!! Form::button('<i class="fa fa-check-circle"></i> ENVIAR', ['type'=>'submit', 'class' => 'btn btn-primary']) !!}
            <!--button type="submit" class="btn btn-primary"><i class="fa fa-check-circle"></i> Save changes</button-->
        </form>
    </div>