$(document).ready(function(){

    tableHistorial = $('#table-historial').DataTable({
                                                bLengthChange: false,
                                                lengthMenu: [15],
                                                columns: 
                                                    [
                                                        {data: "created", title: 'Date'},
                                                        {data: "invoice_number", title: 'Reference'},
                                                        {data: 'amount_paid', title: 'Import',
                                                            render: function (data, type) {
                                                                return '$ ' + data;
                                                            },
                                                        },
                                                        {data: 'invoice_pdf', title: 'Actions',
                                                            render: function (data, type) {
                                                                return '<a class="text-info" href="' + data + '">Invoice</a>';
                                                            },
                                                        }
                                                    ]
                                                });

    tableHistorial.rows.add( historyPayments ).draw();

  /**
   * emailCustomer, urlCreateSubscription, stripePublishableKey on /resource/views/app/stripe/info-variables.blade.php
   * 
   **/
  $(".btn-subscription").click(function(){
    const amount         =  $(this).closest( ".subscription-details" ).data('amount');
    const product_name   =  $(this).closest( ".subscription-details" ).data('productName');
    product_sus_id =  $(this).closest( ".subscription-details" ).data('productId');
    handlerCreateSubscription.open({
      locale: 'auto',
      description: product_name ,
      image: "app/img/favicon.png",
      email: emailCustomer,        
      name: 'MyFormSolution.com',
      panelLabel: ( amount > 0) ? 'Pay' : 'Suscribe' ,
      amount: parseFloat( amount * 100 )
      });
  });

  
  $("#cancel-subscription").click(function(){
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, cancel it!'
    }).then((result) => {
      if (result.value === true) {
        fetch( urlCancelSubscription , {
              method: "POST",
              headers:{
                  'Content-Type': 'application/json',
                  'Accept' : ' application/json',
                  'X-CSRF-TOKEN':  $('meta[name="csrf-token"]').attr('content')
              },
              body: JSON.stringify({
                  subscription_id : subscriptionId
              })

          })
          .then(response => response.text())
            .then(data => {
              let response =  JSON.parse( data )
              if (response.code === 200){
                Swal.fire(
                   response.message,
                  '',
                  'success'
                )
                const  btnCancel = document.getElementById("cancel-subscription");
                const btnCard = document.getElementById("change-card");
                btnCancel.remove();
                btnCard.remove();

                const text = document.createElement("p");
                text.classList.add('text-danger');
                text.innerHTML = "<b>Cancel At</b> :" +response.data.cancel_at;
                document.getElementById("info-container").appendChild(text);
              }else if(response.code === 400){
                Swal.fire(
                  response.errors,
                  '',
                  'error'
                )
              }else{
                Swal.fire(
                  'Error, refresh and try Again',
                  'If bug continue please contact Administrator',
                  'error'
                )
              }
            })
         .catch(error => {
            Swal.fire(
                'Error, refresh and try Again',
                'If bug continue please contact Administrator',
                'error'
            )
         });
      }
    })
  });

  $("#change-card").click(function(){
    handlerChangeCard.open({
    locale: 'auto',
    description: 'This action NO generate any payment' ,
    image: "app/img/favicon.png",
    email: emailCustomer,        
    name: 'MyFormSolution.com',
    panelLabel: 'Update Card',
    amount: 0
    });
  });

  var handlerCreateSubscription = StripeCheckout.configure({
      key: stripePublishableKey,
      locale: 'auto',
      token: function(token) {
        fetch( urlUpdateSubscription , {
            method: "POST",
            headers:{
                'Content-Type': 'application/json',
                'Accept' : ' application/json',
                'X-CSRF-TOKEN':  $('meta[name="csrf-token"]').attr('content')
            },
            body: JSON.stringify({
                token_card: token.id,
                product_sus_id
            })

        })
        .then(response => response.text())
        .then(data => {
          let response =  JSON.parse( data )
          if (response.code === 200){
            Swal.fire(
               response.message,
              '',
              'success'
            )
            location.reload();
          }else if(response.code === 400){
            Swal.fire(
              response.errors,
              '',
              'error'
            )
          }else{
            Swal.fire(
              'Error, refresh and try Again',
              (response.message)?(response.message):'Please try again if error persist try with another Card' ,
              'error'
            )
          }
        });
      }
  });

  var handlerChangeCard = StripeCheckout.configure({
      key: stripePublishableKey,
      locale: 'auto',
      token: function(token) {
        fetch( urlChangeCard , {
            method: "POST",
            headers:{
                'Content-Type': 'application/json',
                'Accept' : ' application/json',
                'X-CSRF-TOKEN':  $('meta[name="csrf-token"]').attr('content')
            },
            body: JSON.stringify({
                token_card: token.id,
            })
        })
        .then(response => response.text())
        .then(data => {
          let response =  JSON.parse( data )
          if (response.code === 200){
            Swal.fire(
               response.message,
              '',
              'success'
            )
            document.getElementById('brand-icon').className  = 'fa fa-2x '+response.data.brand_icon;
            document.getElementById("brand-text").innerHTML  = response.data.brand;
            document.getElementById("4digit-text").innerHTML = response.data.last4;
            document.getElementById("expDate-text").innerHTML = response.data.exp_year +"/" +  response.data.exp_month
          }else if(response.code === 400){
            Swal.fire(
              response.errors,
              '',
              'error'
            )
          }else{
            Swal.fire(
              'Error, refresh and try Again',
              (response.message)?(response.message):'Please try again if error persist try with another Card' ,
              'error'
            )
          }
        })
      }
  });
});