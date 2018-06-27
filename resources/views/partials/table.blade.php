<section class="service-area">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="section-title">
                <h2 class="text-white">Table Absen</h2>
              </div>
            </div>
          </div>
 <div class="row white centered">
               <div class="row">

                <!-- Section header -->
                <div class="section-header text-center">
                    <h2 class="title">SISWA</h2>
                </div>
                <!-- /Section header -->

                <!-- blog -->
                <div class="panel-title pull-right">
                        <link rel="stylesheet" type="text/css" href="/assets/data/css/datatables.min.css"/>
                            <script type="text/javascript" src="/assets/data/js/datatables.min.js"></script>
  </div>
               
              <div class="panel-body">
              <div class="table-responsive">
                <label>Cari</label>
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for date..">
                <br>
                <br>
                  <table id="myTable" class="table">
                    <thead>
                    <tr>
                      <th>&nbsp&nbsp&nbsp   No</th>
                      <th>&nbsp&nbsp&nbsp   Tgl_absen</th>
                      <th>&nbsp&nbsp&nbsp   Kelas</th>
                      <th>&nbsp&nbsp&nbsp   Nis</th>
                      <th>&nbsp&nbsp&nbsp   Nama_Siswa</th>
                      <th>&nbsp&nbsp&nbsp   Keterangan</th>
                     
                    </tr>
                    </thead>
                    <tbody>
                        <?php $nomor = 1; ?>
                        @php $no = 1; @endphp
                        @foreach($b as $data)
                       <tr>
                       <td>{{ $no++ }}</td>
                       <td>{{ $data->tgl_absen }}</td>
                       <td>{{ $data->siswa->kelas->kelas }}</td>
                       <td>{{ $data->siswa->nis }}</td>
                       <td>{{ $data->siswa->nama }}</td>
                       <td>{{ $data->Keterangan->keterangan }}</td>
                       
                      </tr>
                      @endforeach   
                    </tbody>
                     </table>
                  <script>
                     function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
                     }
                  </script>


                </div>
              </div>
            </div>  
        </div>

                <!-- /blog --

                <!-- blog -->
                    </div>
                </div>
                <!-- /blog -->

            </div>
                
            </div>
      </section>
