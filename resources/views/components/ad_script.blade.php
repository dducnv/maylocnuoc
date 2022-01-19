      <!-- Core -->
      <script src="{{asset('assets/admin/vendor/jquery/jquery.min.js')}}"></script>
      <script src="{{asset('/vendor/laravel-filemanager/js/stand-alone-button.js')}}"></script>
      <script src="{{asset('assets/admin/vendor/@popperjs/core/dist/umd/popper.min.js')}}"></script>
      <script src="{{asset('assets/admin/vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('assets/admin/vendor/bootstrap/dist/js/bootstrap-tagsinput.min.js')}}"></script>
      <script src="{{asset('assets/admin/')}}/vendor/tinymce/tinymce.min.js"></script>
{{--      <script src="{{asset('assets/admin/')}}/vendor/tinymce/plugins/code/plugin.min.js"></script>--}}
      <!-- /Vendor JS -->
      <script src="{{asset('assets/admin/vendor/onscreen/dist/on-screen.umd.min.js')}}"></script>
      <!-- Slider -->
      <script src="{{asset('assets/admin/vendor/nouislider/distribute/nouislider.min.js')}}"></script>

      <!-- Smooth scroll -->
      <script src="{{asset('assets/admin/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js')}}"></script>

      <!-- Charts -->
      <script src="{{asset('assets/admin/vendor/chartist/dist/chartist.min.js')}}"></script>
      <script src="{{asset('assets/admin/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>

      <!-- Datepicker -->
      <script src="{{asset('assets/admin/vendor/vanillajs-datepicker/dist/js/datepicker.min.js')}}"></script>


      <!-- Sweet Alerts 2 -->
      <script src="{{asset('assets/admin/vendor/sweetalert2/dist/sweetalert2.all.min.js')}}"></script>

      <!-- Moment JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>
      <!-- Vanilla JS Datepicker -->
      <script src="{{asset('assets/admin/vendor/vanillajs-datepicker/dist/js/datepicker.min.js')}}"></script>
      <!-- Notyf -->
      <script src="{{asset('assets/admin/vendor/notyf/notyf.min.js')}}"></script>

      <!-- Simplebar -->
      <script src="{{asset('assets/admin/vendor/simplebar/dist/simplebar.min.js')}}"></script>

      <!-- Github buttons -->
      <script async defer src="https://buttons.github.io/buttons.js"></script>
      {{-- toastr --}}
      <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
      {!! Toastr::message() !!}
      <!-- Volt JS -->
      <script src="{{asset('assets/admin/assets/js/admin.js')}}"></script>
      <script src="{{asset('assets/admin/assets/js/script.js')}}"></script>
      <script src="{{asset('assets/vendor/sweetalert/sweetalert.min.js')}}"></script>

      <script type="text/javascript">
          // Script Category
          function deleteCategory(id){
              swal({
                      title: "{{__('Bạn Có Chắc Không?')}}",
                      text: "{{__('Bạn sẽ không thể khôi phục lại được!!')}}",
                      type: "warning",
                      showCancelButton: true,
                      confirmButtonColor: '#DD6B55',
                      confirmButtonText: '{{__('Đồng Ý!!')}}',
                      cancelButtonText: "{{__('Hủy Bỏ!!')}}",
                      closeOnConfirm: false,
                      closeOnCancel: false
                  },
                  function(isConfirm){
                      if (isConfirm){
                          // console.log(id)
                          $.ajax({
                              url:"{{url('admin/danh-muc/xoa-danh-muc')}}"+'/'+id,
                              type:'DELETE',
                              data:{"_token": "{{ csrf_token() }}"},
                              beforeSend: function () {
                                  swal({
                                      title: '<div class="spinner-border text-primary" role="status"></div><br/> <span class="text-center mt-3">{{__('Đang Thực Hiện')}}...</span> ',
                                      html: "loading",
                                      showCancelButton: false,
                                      showConfirmButton: false
                                  });
                              },
                              success:function (data){
                                  swal({
                                      type: 'success',
                                      title: '{{__('Xóa Thành Công!!')}}',
                                      text: '{{__('Nhấn vào nút để tiếp tục !!')}}',
                                      confirmButtonColor:true,
                                  },function (isConfirm){
                                      if(isConfirm){
                                          location.reload();
                                      }
                                  });
                              },
                              error:function (data){
                                  // console.log(this.url)
                                  sweetAlert("{{__('Lỗi..')}}","{{__('Đã gặp vấn đề về hệ thống!!')}}","error")
                              }
                          });
                      } else {
                          swal("{{__('Đã Hủy!!')}}", "{{__('Dữ liệu vẫn còn!!')}}", "error");
                      }
                  });

          }
          function StatusCategory(id) {
              $.ajax({
                  url: "{{url('/admin/danh-muc/trang-thai-danh-muc')}}" + "/" + id,
                  method: 'PUT',
                  data:{"_token": "{{ csrf_token() }}"},
                  success: function (data) {
                      location.reload();
                  },
                  error: function (data) {
                      // console.log(this.url)
                      sweetAlert("Lỗi Dữ Liệu", "Hỏi Đức Đẹp Zai Thôiiii!!", "error")
                  }
              },);
          }

          // End Script Category
      </script>

      <script type="text/javascript">
          //Script Brand

          function deleteBrand(id){
              swal({
                      title: "{{__('Bạn Có Chắc Không?')}}",
                      text: "{{__('Bạn sẽ không thể khôi phục lại được!!')}}",
                      type: "warning",
                      showCancelButton: true,
                      confirmButtonColor: '#DD6B55',
                      confirmButtonText: '{{__('Đồng Ý!!')}}',
                      cancelButtonText: "{{__('Hủy Bỏ!!')}}",
                      closeOnConfirm: false,
                      closeOnCancel: false
                  },
                  function(isConfirm){
                      if (isConfirm){
                          // console.log(id)
                          $.ajax({
                              url:"{{url('admin/nhan-hieu/xoa-nhan-hieu')}}"+'/'+id,
                              type:'DELETE',
                              data:{"_token": "{{ csrf_token()}}"},
                              beforeSend: function () {
                                  swal({
                                      title: '<div class="spinner-border text-primary" role="status"></div><br/> <span class="text-center mt-3">{{__('Đang Thực Hiện')}}...</span> ',
                                      html: "loading",
                                      showCancelButton: false,
                                      showConfirmButton: false
                                  });
                              },
                              success:function (data){
                                  swal({
                                      type: 'success',
                                      title: '{{__('Xóa Thành Công!!')}}',
                                      text: '{{__('Nhấn vào nút để tiếp tục !!')}}',
                                      confirmButtonColor:true,
                                  },function (isConfirm){
                                      if(isConfirm){
                                          location.reload();
                                      }
                                  });
                              },
                              error:function (data){
                                  console.log(this.url,this.data)
                                  sweetAlert("{{__('Lỗi..')}}","{{__('Đã gặp vấn đề về hệ thống!!')}}","error")
                              }
                          });
                      } else {
                          swal("{{__('Đã Hủy!!')}}", "{{__('Dữ liệu vẫn còn!!')}}", "error");
                      }
                  });
          }
          function brandStatus(id) {
              $.ajax({
                  url: "{{url('/admin/nhan-hieu/trang-thai-nhan-hieu')}}" + "/" + id,
                  method: 'PUT',
                  data: {"_token": "{{ csrf_token() }}"},
                  success: function (data) {
                      location.reload();
                  },
                  error: function (data) {
                      // console.log(this.url)
                      swal({
                          type: 'error',
                          title: '{{__('Lỗi hệ thống!!')}}',
                          text: '{{__( "Hỏi Đức Đẹp Zai Thôiiii!!")}}',
                          confirmButtonColor:true,
                      },function (isConfirm){
                          if(isConfirm){
                              location.reload();
                          }
                      });

                  }
              },);
          }
      </script>
      <script type="text/javascript">
          function deleteProduct(id){
              swal({
                      title: "{{__('Bạn Có Chắc Không?')}}",
                      text: "{{__('Bạn sẽ không thể khôi phục lại được!!')}}",
                      type: "warning",
                      showCancelButton: true,
                      confirmButtonColor: '#DD6B55',
                      confirmButtonText: '{{__('Đồng Ý!!')}}',
                      cancelButtonText: "{{__('Hủy Bỏ!!')}}",
                      closeOnConfirm: false,
                      closeOnCancel: false
                  },
                  function(isConfirm){
                      if (isConfirm){
                          // console.log(id)
                          $.ajax({
                              url:"{{url('admin/san-pham/xoa-san-pham')}}"+'/'+id,
                              type:'DELETE',
                              data:{"_token": "{{ csrf_token() }}"},
                              beforeSend: function () {
                                  swal({
                                      title: '<div class="spinner-border text-primary" role="status"></div><br/> <span class="text-center mt-3">{{__('Đang Thực Hiện')}}...</span> ',
                                      html: "loading",
                                      showCancelButton: false,
                                      showConfirmButton: false
                                  });
                              },
                              success:function (data){
                                  swal({
                                      type: 'success',
                                      title: '{{__('Xóa Thành Công!!')}}',
                                      text: '{{__('Nhấn vào nút để tiếp tục !!')}}',
                                      confirmButtonColor:true,
                                  },function (isConfirm){
                                      if(isConfirm){
                                          location.reload();
                                      }
                                  });
                              },
                              error:function (data){
                                  // console.log(this.url)
                                  sweetAlert("{{__('Lỗi..')}}","{{__('Đã gặp vấn đề về hệ thống!!')}}","error")
                              }
                          });
                      } else {
                          swal("{{__('Đã Hủy!!')}}", "{{__('Dữ liệu vẫn còn!!')}}", "error");
                      }
                  });
          }
          function productStatus(id) {
              $.ajax({
                  url: "{{url('/admin/san-pham/trang-thai-san-pham')}}" + "/" + id,
                  method: 'PUT',
                  data: {"_token": "{{ csrf_token() }}"},
                  success: function (data) {
                      location.reload();
                  },
                  error: function (data) {
                    //   console.log(this.url,this.data)
                      swal({
                          type: 'error',
                          title: '{{__('Lỗi hệ thống!!')}}',
                          text: '{{__( "Hỏi Đức Đẹp Zai Thôiiii!!")}}',
                          confirmButtonColor:true,
                      },function (isConfirm){
                          if(isConfirm){
                              location.reload();
                          }
                      });

                  }
              },);
          }

     </script>
     <script type="text/javascript">
        function deleteSlide(id){
            swal({
                    title: "{{__('Bạn Có Chắc Không?')}}",
                    text: "{{__('Bạn sẽ không thể khôi phục lại được!!')}}",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: '#DD6B55',
                    confirmButtonText: '{{__('Đồng Ý!!')}}',
                    cancelButtonText: "{{__('Hủy Bỏ!!')}}",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function(isConfirm){
                    if (isConfirm){
                        // console.log(id)
                        $.ajax({
                            url:"{{url('admin/hien-thi/trinh-chieu/xoa-trinh-chieu')}}"+'/'+id,
                            type:'DELETE',
                            data:{"_token": "{{ csrf_token() }}"},
                            beforeSend: function () {
                                swal({
                                    title: '<div class="spinner-border text-primary" role="status"></div><br/> <span class="text-center mt-3">{{__('Đang Thực Hiện')}}...</span> ',
                                    html: "loading",
                                    showCancelButton: false,
                                    showConfirmButton: false
                                });
                            },
                            success:function (data){
                                swal({
                                    type: 'success',
                                    title: '{{__('Xóa Thành Công!!')}}',
                                    text: '{{__('Nhấn vào nút để tiếp tục !!')}}',
                                    confirmButtonColor:true,
                                },function (isConfirm){
                                    if(isConfirm){
                                        location.reload();
                                    }
                                });
                            },
                            error:function (data){
                                // console.log(this.url)
                                sweetAlert("{{__('Lỗi..')}}","{{__('Đã gặp vấn đề về hệ thống!!')}}","error")
                            }
                        });
                    } else {
                        swal("{{__('Đã Hủy!!')}}", "{{__('Dữ liệu vẫn còn!!')}}", "error");
                    }
                });
        }
        function slideStatus(id) {
            $.ajax({
                url: "{{url('admin/hien-thi/trinh-chieu/trang-thai')}}" + "/" + id,
                method: 'PUT',
                data: {"_token": "{{ csrf_token() }}"},
                success: function (data) {
                    location.reload();
                },
                error: function (data) {
                  //   console.log(this.url,this.data)
                    swal({
                        type: 'error',
                        title: '{{__('Lỗi hệ thống!!')}}',
                        text: '{{__( "Hỏi Đức Đẹp Zai Thôiiii!!")}}',
                        confirmButtonColor:true,
                    },function (isConfirm){
                        if(isConfirm){
                            location.reload();
                        }
                    });

                }
            },);
        }


   </script>










