const paymentForm = document.getElementById('paymentForm')
paymentForm.addEventListener('submit', payWithPaystack, false)
function payWithPaystack(e) {
  e.preventDefault()
  let email=document.getElementById('email-address').value;
let ammount=document.getElementById('amount').value * 100;
let key=document.getElementById('key').value;
  let handler = PaystackPop.setup({
    key: key, // Replace with your public key
    email: email,
    amount: ammount,
    currency:"USD",
    ref: '' + Math.floor(Math.random() * 1000000000 + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function () {
      alert('Window closed.')
    },
    callback: function (response) {
      let url="./Apis/api.php";
      console.log(response)
        if(response['message']=="Approved" && response['status']){
            $.ajax({
        url:url,
        method: 'post',
        data:{
          action:"paystack",
          response:response,
          amt:ammount
        },
        success: function (httpresponse) {
          console.log(httpresponse)

            alert(httpresponse)

          // the transaction status is in response.data.status
        },
      })
        }else{
          alert(response['message']);
        }
    
    },
  })
  handler.openIframe()
}
