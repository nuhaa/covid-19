<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>

<div class="container">
  <div class="row">
      <div class="col-md-4">
        
      </div>
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
      </div>
  </div>
  <table class="table">
      <thead class="thead-dark">
          <tr>
              <th scope="col">No</th>
              <th scope="col">Provinsi</th>
              <th scope="col">Positif</th>
              <th scope="col">Sembuh</th>
              <th scope="col">Meninggal</th>
          </tr>
      </thead>
      <tbody>
      @foreach ($data as $datas)
          <tr {{ $datas['attributes']['Provinsi'] == 'Jawa Timur' ? 'style=background:#20c997' : '' }}>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $datas['attributes']['Provinsi'] }}</td>
              <td>{{ $datas['attributes']['Kasus_Posi'] }}</td>
              <td>{{ $datas['attributes']['Kasus_Semb'] }}</td>
              <td>{{ $datas['attributes']['Kasus_Meni'] }}</td>
          </tr>
      @endforeach
      </tbody>
  </table>
</div>
