@extends('layouts.master_backend')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
                        <div class="card">
                            <h5 class="card-header">Products</h5>
                            <div class="table-responsive text-nowrap">
                                <a href="{{ route('c.create') }}" class="btn btn-success mx-3"><i class='bx bxs-plus-circle'></i> เพิ่มข้อมูล</a>
                              <table class="table mt-4">
                                <thead class="table-dark">
                                  <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>images</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Created_at</th>
                                    <th>Updated_at</th>
                                    <th>Actions</th>
                                  </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                  <tr>
                                  <td>1</td>
                                  <td>iphone 14 Pro Max</td>
                                  <td>iphone.jpg</td>
                                  <td>45,990 บาท</td>
                                  <td>ผลิตโดยบริษัทแอปเปิ้ล</td>
                                  <td></td>
                                  <td></td>
                                  <td>
                                  <a href="" class="btn btn-success">แก้ไข</a>
                                  <a href="" class="btn btn-danger">ลบ</a>
                                  </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
@endsection