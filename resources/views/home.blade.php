<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Document</title>

    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="masthead">
        <h3 class="muted">Payment Code Generator</h3>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-12">
            {!! Form::open(['route' => 'generate']) !!}
                <div class="form-group">
                    <label>Price</label>
                    <div class="row">
                        <div class="col-md-9"><input type="number" name="price" value="9500" class="form-control"></div>
                        <div class="col-md-3"><select name="currency" class="form-control">
                            <option value="HRK">HRK</option>
                        </select></div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address1" value="MILKE TRNINE 63" class="form-control">
                    <input type="text" name="address2" value="40000 ČAKOVEC" class="form-control">
                    <input type="text" name="address3" value="" class="form-control">
                    <input type="text" name="address4" value="" class="form-control">
                    <input type="text" name="address5" value="" class="form-control">
                </div>

                <div class="form-group">
                    <label>IBAN</label>
                    <input type="text" name="iban" value="HR5623400091166032923" class="form-control">
                </div>

                <div class="form-group">
                    <label>Model</label>
                    <input type="text" name="model" value="HR00" class="form-control">
                </div>

                <div class="form-group">
                    <label>Invoice number</label>
                    <input type="text" name="invoice_number" value="2-000X-2016" class="form-control">
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <input type="text" name="description" value="PLAĆANJE PREMA RAČUNU" class="form-control">
                </div>

                <div class="form-group form-actions">
                    <button type="submit" class="btn btn-primary">Generate</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
