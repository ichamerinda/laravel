@extends('includes.header')
@section('content')

<section class="wrapper" style='margin-top:60px;display:inline-block;width:100%;padding:15px 0 0 15px;'>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <section class="box ">
            <header class="panel_header">
                <h2 class="title pull-left">Data Diri Calon Anak Asuh</h2>
                    <div class="actions panel_actions pull-right">
                        <i class="box_toggle fa fa-chevron-down"></i>
                        <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                        <i class="box_close fa fa-times"></i>
                    </div>
            </header>
            <div class="content-body">   
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="form-label" for="field-1">Id Anak Asuh</label>
                            <div class="controls">
                                 <input type="text" placeholder="Phone" class="form-control" name="txtPhone" id="txtPhone">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="field-1">Id Donatur</label>
                            <div class="controls">
                                <input type="text" placeholder="Phone" class="form-control" name="txtPhone" id="txtPhone">
                            </div>
                        </div>


                         <div class="form-group">
                            <label class="form-label" for="field-1">Nama Anak Asuh</label>
                             <div class="controls">
                                <input type="text" placeholder="Phone" class="form-control" name="txtPhone" id="txtPhone">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="field-1">Jenis Kelamin</label>
                            <div class="controls">
                                <input type="text" placeholder="Phone" class="form-control" name="txtPhone" id="txtPhone">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="field-1">Tempat, tanggal lahir</label>
                            <div class="controls">
                                <input type="text" placeholder="Phone" class="form-control" name="txtPhone" id="txtPhone">
                                <br>
                                <input type="text" class="form-control datepicker" data-format="D, dd MM yyyy" value="Mon, 02 February 2015">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="field-1">Alamat Anak</label>
                            <div class="controls">
                                <input type="text" placeholder="Phone" class="form-control" name="txtPhone" id="txtPhone">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="field-1">Id Kecamatan</label>
                            <div class="controls">
                                <input type="text" placeholder="Phone" class="form-control" name="txtPhone" id="txtPhone">
                            </div>
                        </div>

                        <h4>PENDIDIKAN </h4>
                        <div class="form-group">
                            <label class="form-label" for="field-1">Nama Sekolah</label>
                            <div class="controls">
                                <input type="text" placeholder="Phone" class="form-control" name="txtPhone" id="txtPhone">
                            </div>
                         </div>

                        <div class="form-group">
                            <label class="form-label" for="field-1">Alamat Sekolah</label>
                            <div class="controls">
                                <input type="text" placeholder="Phone" class="form-control" name="txtPhone" id="txtPhone">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="field-1">Kelas</label>
                            <div class="controls">
                                <input type="text" placeholder="Phone" class="form-control" name="txtPhone" id="txtPhone">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="field-1">Id Tingkatan Sekolah</label>
                            <div class="controls">
                                <input type="text" placeholder="Phone" class="form-control" name="txtPhone" id="txtPhone">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="field-1">Nilai Rata-rata raport semester sebelumnya</label>
                            <div class="controls">
                                <input type="text" placeholder="Phone" class="form-control" name="txtPhone" id="txtPhone">
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="form-label" for="field-1">Nilai Rata-rata raport semester saat ini</label>
                            <div class="controls">
                                <input type="text" placeholder="Phone" class="form-control" name="txtPhone" id="txtPhone">
                            </div>
                        </div>
                                    </div>
                                </div>
                            </div>
                        </section></div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title pull-left">Kondisi Calon Anak Asuh</h2>
                                <div class="actions panel_actions pull-right">
                                    <i class="box_toggle fa fa-chevron-down"></i>
                                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                                    <i class="box_close fa fa-times"></i>
                                </div>
                            </header>
                            <div class="content-body">    
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <h4>KONDISI SAUDARA KANDUNG</h4>
                                        <div class="form-group">
                                            <label class="form-label" for="field-1">Jumlah Saudara</label>
                                            <div class="controls">
                                                <input type="text" placeholder="Phone" class="form-control" name="txtPhone" id="txtPhone">
                                            </div>
                                        </div>
                                        

                                         <div class="form-group">
                                            <label class="form-label" for="field-1">Anak ke - </label>
                                            <div class="controls">
                                                <input type="text" placeholder="Phone" class="form-control" name="txtPhone" id="txtPhone">
                                            </div>
                                        </div>
                                       
                                        <h4>IDENTITAS ORANG TUA </h4>
                                        <div class="form-group">
                                            <label class="form-label" for="field-1">Nama Ayah</label>
                                            <div class="controls">
                                                <input type="text" placeholder="Phone" class="form-control" name="txtPhone" id="txtPhone">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label" for="field-1">Nama Ibu</label>
                                            <div class="controls">
                                                <input type="text" placeholder="Phone" class="form-control" name="txtPhone" id="txtPhone">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label" for="field-1">Pekerjaan Ayah</label>
                                            <div class="controls">
                                                <input type="text" placeholder="Phone" class="form-control" name="txtPhone" id="txtPhone">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label" for="field-1">Pekerjaan Ibu</label>
                                            <div class="controls">
                                                <input type="text" placeholder="Phone" class="form-control" name="txtPhone" id="txtPhone">
                                            </div>
                                        </div>

                                        <h4>KEAGAMAAN</h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="form-label" for="field-1">Rutinitas Sholat setiap hari :</label>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <input tabindex="5" type="checkbox" id="square-checkbox-1" class="skin-square-red" >
                                                                <label class="icheck-label form-label" for="square-checkbox-1">Rutin </label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <input tabindex="5" type="checkbox" id="square-checkbox-6" class="skin-square-red">
                                                                <label class="icheck-label form-label" for="square-checkbox-6">Kadang</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <input tabindex="5" type="checkbox" id="square-checkbox-6" class="skin-square-red" checked>
                                                                <label class="icheck-label form-label" for="square-checkbox-6">Tidak Pernah</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- END DIV ROW -->
                                        <br>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="form-label" for="field-1">Rutinitas Mengaji : </label>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <input tabindex="5" type="checkbox" id="square-checkbox-1" class="skin-square-red">
                                                                <label class="icheck-label form-label" for="square-checkbox-1">Aktif </label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <input tabindex="5" type="checkbox" id="square-checkbox-6" class="skin-square-red" checked>
                                                                <label class="icheck-label form-label" for="square-checkbox-6">Tidak Aktif</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- END DIV ROW -->

                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="form-label" for="field-1">Kemampuan baca Al -Quran : </label>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <input tabindex="5" type="checkbox" id="square-checkbox-1" class="skin-square-red" checked>
                                                                <label class="icheck-label form-label" for="square-checkbox-1">Baik </label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <input tabindex="5" type="checkbox" id="square-checkbox-6" class="skin-square-red" checked>
                                                                <label class="icheck-label form-label" for="square-checkbox-6">Terbata - bata</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <input tabindex="5" type="checkbox" id="square-checkbox-6" class="skin-square-red" checked>
                                                                <label class="icheck-label form-label" for="square-checkbox-6">Masih Iqra</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- END DIV ROW -->
                                        <br>

                                        <h4>SOSIAL EKONONOMI</h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="form-label" for="field-1">Kondisi Rumah :</label>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <input tabindex="5" type="checkbox" id="square-checkbox-1" class="skin-square-red">
                                                                <label class="icheck-label form-label" for="square-checkbox-1">Lantai</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <input tabindex="5" type="checkbox" id="square-checkbox-6" class="skin-square-red" >
                                                                <label class="icheck-label form-label" for="square-checkbox-6">Plester</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <input tabindex="5" type="checkbox" id="square-checkbox-6" class="skin-square-red" checked>
                                                                <label class="icheck-label form-label" for="square-checkbox-6">Tanah</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- END DIV ROW -->

                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="form-label" for="field-1">Status Rumah :</label>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <input tabindex="5" type="checkbox" id="square-checkbox-1" class="skin-square-red" checked>
                                                                <label class="icheck-label form-label" for="square-checkbox-1">Rumah Sendiri</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <input tabindex="5" type="checkbox" id="square-checkbox-6" class="skin-square-red" checked>
                                                                <label class="icheck-label form-label" for="square-checkbox-6">Kontrak</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <input tabindex="5" type="checkbox" id="square-checkbox-6" class="skin-square-red" checked>
                                                                <label class="icheck-label form-label" for="square-checkbox-6">Rumah Sanak Saudara</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- END DIV ROW -->


                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="form-label" for="field-1">Status Keluarga:</label>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <input tabindex="5" type="checkbox" id="square-checkbox-1" class="skin-square-red" checked>
                                                                <label class="icheck-label form-label" for="square-checkbox-1">Yatim</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <input tabindex="5" type="checkbox" id="square-checkbox-6" class="skin-square-red" checked>
                                                                <label class="icheck-label form-label" for="square-checkbox-6">Membutuhkan / fakir</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <input tabindex="5" type="checkbox" id="square-checkbox-6" class="skin-square-red" checked>
                                                                <label class="icheck-label form-label" for="square-checkbox-6">Kurang Mampu / miskin</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- END DIV ROW -->


                                        <br><br>
                                        <div class="row">
                                            <div class="col-md-12">
                                            <div class="pull-right">
                                                <button type="submit" class="btn btn-success">Save</button>
                                                <button type="button" class="btn">Cancel</button>
                                            </div>       
                                            </div>
                                        </div> <!-- END DIV ROW -->
                                    </div> <!--END div class="col-md-12 col-sm-12 col-xs-12"-->
                                </div> <!-- END div class = "row" -->
                            </div> <!-- END div class="content-body" -->
                        </section> <!-- end section = box -->
                    </div> <!-- end div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" -->
                </section> <!-- END class="wrapper"  -->

<script type="text/javascript">
    $($('ul.wraplist li')[1]).addClass('open');
</script>
@endsection