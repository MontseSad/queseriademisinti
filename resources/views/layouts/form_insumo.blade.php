<div class="panel-content">
    <form >
        <div class="form-group">
            {!! Form::label('nombre', 'Nombre del producto') !!}
            {!! Form::text('nombre', null, ['class' => 'form-control', 'required'=>'required']) !!}
            <!--label>Nombre del producto</label>
            <input type="text" id="nombre" class="form-control" required-->
        </div>
        <div class="form-group">
            {!! Form::label('unidad', 'Unidad') !!}
            {!! Form::select('unidad', array('kg' => 'Kilogramos', 'gr' => 'Gramos',
            'lt' => 'Litros', 'pz' => 'Piezas', 'mt' => 'Metros', 'cm' => 'Centímetros'), null, 
            ['class'=> 'form-control', 'required'=>'required']) !!}
            <!--label>Coste de producción</label>
            <input type="number" name="coste_in" class="form-control price"  required-->
        </div>
        <div class="form-group">
            {!! Form::label('cantidad', 'Cantidad') !!}
            {!! Form::number('cantidad', null, ['class'=> 'form-control', 'required'=>'required']) !!}
            <!--label>Coste de venta</label>
            <input name="coste_out" type="number" class="form-control price"  required-->
        </div>
        <div class="form-group">
            {!! Form::label('precio_u', 'Precio unitario') !!}
            {!! Form::number('precio_u', null, ['class'=> 'form-control', 'required'=>'required']) !!}
            <!--label>Coste de venta</label>
            <input name="coste_out" type="number" class="form-control price"  required-->
        </div>
        <div class="form-group">
            {!! Form::label('precio_t', 'Precio total') !!}
            {!! Form::number('precio_t', null, ['class'=> 'form-control', 'required'=>'required']) !!}
            <!--label>Coste de venta</label>
            <input name="coste_out" type="number" class="form-control price"  required-->
        </div>
        {!! Form::button('<i class="fa fa-check-circle"></i> ACEPTAR', ['type'=>'submit', 'class' => 'btn btn-primary']) !!}
        <!--button type="submit" class="btn btn-primary"><i class="fa fa-check-circle"></i> Save changes</button-->
    </form>
</div>