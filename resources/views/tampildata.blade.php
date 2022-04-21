<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Tambah Work Order</title>
</head>

<body>
  <h1 class="text-center mb-4">Edit Work Order</h1>

  <div class="container">

    <div class="row justify-content-center">
      <div class="col-8">
        <div class="card">

          <body>
            <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->nama }}">

              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">pekerjaan_temuan</label>
                <input type="text" name="pekerjaan_temuan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->pekerjaan_temuan }}">

              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">lokasi</label>
                <input type="text" name="lokasi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->lokasi }}">

              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">tgl_open</label>
                <input type="date" name="tgl_open" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->tgl_open }}">

              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">jam_open</label>
                <input type="time" name="jam_open" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->jam_open }}">

              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">bidang_pekerjaan</label>
                <select class="form-select" name="bidang_pekerjaan" aria-label="Default select example">
                  <option selected>{{ $data->bidang_pekerjaan }}</option>
                  <option value="Mekanikal">Mekanikal</option>
                  <option value="Elektrikal">Elektrikal</option>
                  <option value="Lab">Lab</option>
                  <option value="Other">Other</option>
                </select>
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">status_pekerjaan</label>
                <select class="form-select" name="status_pekerjaan" aria-label="Default select example">
                  <option selected>{{ $data->status_pekerjaan }}</option>
                  <option value="open">open</option>
                  <option value="close">close</option>
                </select>
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">pic</label>
                <input type="text" name="pic" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->pic }}">

              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">tgl_close</label>
                <input type="date" name="tgl_close" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"value="{{ $data->tgl_close }}">

              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">jam_close</label>
                <input type="time" name="jam_close" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"value="{{ $data->jam_close }}">

              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">penyebab</label>
                <input type="text" name="penyebab" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"value="{{ $data->penyebab }}">

              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">tindakan</label>
                <input type="text" name="tindakan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"value="{{ $data->tindakan }}">

              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">jenis_pekerjaan</label>
                <select class="form-select" name="jenis_pekerjaan" aria-label="Default select example">
                  <option selected>{{ $data->jenis_pekerjaan }}</option>
                  <option value="Preventive Maintenance">Preventive Maintenance</option>
                  <option value="Predictive Maintenance">Predictive Maintenance</option>
                  <option value="Corrective Maintenance">Corrective Maintenance</option>
                  <option value="Other">Other</option>
                </select>
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">material</label>
                <input type="text" name="material" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"value="{{ $data->material }}">

              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ket</label>
                <input type="text" name="ket" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"value="{{ $data->ket }}">

              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">foto_open</label>
                <input type="text" name="foto_open" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"value="{{ $data->foto_open }}">

              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">foto_close</label>
                <input type="text" name="foto_close" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"value="{{ $data->foto_close }}">

              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </body>
        </div>
      </div>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>