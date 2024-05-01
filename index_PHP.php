<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Conversor de Longitud</title>
</head>

<body>

    <h1 class="text-center">Conversor de Longitud</h1>

    <div class="container">
        <form method="POST">
            <div class="row mt-4">
                <div class="col-sm-4">
                    <label for="valor">VALOR: </label>
                    <input type="number" name="valor" class="form-control" value="">

                </div>

                <div class="col-sm-4">
                    <label for="desde" class="fomr-label">Desde: </label>
                    <select class="form-select" name="desde">
                        <option selected>--Seleccione un valor--</option>
                        <option value="Milimetro">Milímetro</option>
                        <option value="Centimetro">Centímetro</option>
                        <option value="Decimetro">Decímetro</option>
                        <option value="Metro">Metro</option>
                        <option value="Decametro">Decámetro</option>
                        <option value="Hectometro">Hectómetro</option>
                        <option value="Kilometro">Kilómetro</option>

                    </select>
                </div>

                <div class="col-sm-4">
                    <label for="hasta" class="fomr-label">Hasta: </label>
                    <select class="form-select" name="hasta">
                        <option selected>--Seleccione un valor--</option>
                        <option value="Milimetro">Milímetro</option>
                        <option value="Centimetro">Centímetro</option>
                        <option value="Decimetro">Decímetro</option>
                        <option value="Metro">Metro</option>
                        <option value="Decametro">Decámetro</option>
                        <option value="Hectometro">Hectómetro</option>
                        <option value="Kilometro">Kilómetro</option>

                    </select>
                </div>

            </div>

            <div class="row mt-4">
                <div class="col-sm-6">
                    <button type="submit" name="convertir" class="btn btn-primary w-100 py-4">CONVERTIR</button>
                </div>

                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="valor">RESULTADO: </label>
                        <input type="text" name="resultado" class="form-control">
                    </div>
                </div>
            </div>

        </form>
    </div>


</body>

</html>