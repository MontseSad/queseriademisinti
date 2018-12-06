<div class="panel-content">
    <form >
        <div class="form-group">
            {!! Form::label('nombre', 'Nombre del producto') !!}
            {!! Form::text('nombre', null, ['class' => 'form-control', 'required'=>'required']) !!}
            <!--label>Nombre del producto</label>
            <input type="text" id="nombre" class="form-control" required-->
        </div>
        <div class="form-group">
            {!! Form::label('precio_in', 'Coste de elaboración') !!}
            {!! Form::number('precio_in', null, ['class'=> 'form-control', 'required'=>'required']) !!}
            <!--label>Coste de producción</label>
            <input type="number" name="coste_in" class="form-control price"  required-->
            <span class="help-block">999.99</span>
        </div>
        <div class="form-group">
            {!! Form::label('precio_out', 'Coste de venta') !!}
            {!! Form::number('precio_out', null, ['class'=> 'form-control', 'required'=>'required']) !!}
            <!--label>Coste de venta</label>
            <input name="coste_out" type="number" class="form-control price"  required-->
            <span class="help-block">999.99</span>
        </div>
        <div class="form-group">
            {!! Form::label('receta', 'Receta') !!}
            {!! Form::textarea('receta', null, ['class'=> 'form-control', 'required'=>'required', 'rows'=>'6']) !!}
            <!--label>Receta</label>
            <textarea class="form-control" rows="5" cols="30"  required></textarea-->
        </div>
        <div class="form-group">
            {!! Form::label('descripcion', 'Descripción') !!}
            {!! Form::textarea('descripcion', null, ['class'=> 'form-control', 'required'=>'required', 'rows'=>'2']) !!}
            <!--label>Descripción</label>
            <textarea class="form-control" rows="2" cols="30" ></textarea-->
        </div>
        {!! Form::button('<i class="fa fa-check-circle"></i> ENVIAR', ['type'=>'submit', 'class' => 'btn btn-primary']) !!}
        <!--button type="submit" class="btn btn-primary"><i class="fa fa-check-circle"></i> Save changes</button-->
    </form>
</div>