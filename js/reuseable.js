$(document).ready(function () {
  const url = './app/Apis/api.php'
//   $('#logbtn').click(function () {
    
//     let email = $('#email').val().trim()
//     let pass = $('#password').val().trim()
//     if (email.length > 0) {
//       if (pass.length > 0) {
//         let re = /^\w+([-+.'][^\s]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
//         let emailFormat = re.test(email) // This return result in Boolean type
//         if (emailFormat) {
//           $('.logbtn').css('display', 'none')
//           $('#loading').css('display', 'block')

//           $.ajax({
//             type: 'post',
//             url: url,
//             data: {
//               email: email,
//               pass: pass,
//               action: 'login',
//             },
//             success: function (response) {
//               $('.logbtn').css('display', 'block')
//               $('#loading').css('display', 'none')

//               if (response == true) {
//                 console.log(response)
//                 //  window.location.replace('buysell');
//               } else {
//                 console.log(response)
//                 alert('invalid login detail')
//               }
//             },
//           })
//         } else {
//           alert('Invalid email format')
//         }
//       } else {
//         alert('Password Field can not be empty')
//       }
//     } else {
//       alert('Email Field can not be empty')
//     }
//   })


//   $('#current').click(function () {
//     let email = $('#email').val().trim()
//     let pass = $('#password').val().trim()
//     let country = $('#country').val().trim()
//     let Cpassword=$('#Cpassword').val().trim();
//     // let oksionemail = $('#oksionemail')[0].checked
//     let okterms = $('#okterms')[0].checked
//     if (email.length > 0) {
//       if (pass.length > 0) {
//         if(Cpassword.length>0){
//             if(Cpassword==pass){
//                     let re = /^\w+([-+.'][^\s]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
//         let emailFormat = re.test(email) // This return result in Boolean type
//         if (emailFormat) {
//           if (country.length > 0 && country.toLowerCase() != 'select') {
//             if (okterms == true) {
//               $('.current').css('display', 'none')
//               $('#loading').css('display', 'block')
//               $.ajax({
//                 type: 'POST',
//                 url: url,
//                 data: {
//                   email: email,
//                   pass: pass,
//                   country: country,
//                   action: 'register',
//                 },
//                 // dataType: "json",
//                 success: function (response) {
//                   $('.current').css('display', 'block')
//                   $('#loading').css('display', 'none')

//                   if (response == true) {
//                     window.location.replace('login');
//                   } else {
//                     alert(response)
//                   }
//                 },
//               })
//             } else {
//               alert('accept out terms and policy')
//             }
//           } else {
//             alert('please choose your country')
//           }
//         } else {
//           alert('Invalid email format')
//         }
//             }else{
//                 alert("password not match");
//             }
            
            
//         }else{
//             alert("Confirm password field can not be empty")
//         }
//       } else {
//         alert('Password Field can not be empty')
//       }
//     } else {
//       alert('Email Field can not be empty')
//     }
//   })


//   $('#restbtn').click(function () {
//     let email = $('#emailrr').val().trim()
//     if (email.length > 0) {
//       let re = "/^\w+([-+.'][^\s]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/";
//       let emailFormat = re.test(email) // This return result in Boolean type
//       if (emailFormat) {
//         $('.restbtn').css('display', 'none')
//         $('#loadingrr').css('display', 'block')
//         $.ajax({
//           type: 'POST',
//           url: url,
//           data: {
//             action: 'reset',
//             email: email,
//           },
//           success: function (response) {
//             if(response===true){
//               $('.restbtn').css('display', 'block')
//             $('#loadingrr').css('display', 'none')
//               window.location.replace("login");
//             }else{
//              $('.restbtn').css('display', 'block')
//             $('#loadingrr').css('display', 'none')
//             alert(response)
//             }
           
//           },
//         })
//       } else {
//         alert('Invalid email format')
//       }
//     } else {
//       alert('Email Field can not be empty')
//     }
//   })

  $('#getnepass').click(function () {
    let newpassword = $('#newpassword').val().trim()
    let cpassword = $('#cnewpassword').val().trim()
    let token = $('#token').val().trim()

    if (newpassword.length > 0 && cpassword.length > 0) {
      if (newpassword == cpassword) {
        if (token.length > 0) {
          $('.getnepass').css('display', 'none')
          $('#loadinggr').css('display', 'block')
          $.ajax({
            type: 'POST',
            url: url,
            data: {
              action: 'newpassword',
              password: newpassword,
              token: token,
            },
            //   dataType: "dataType",
            success: function (response) {
              if (response === true) {
                alert('password as been change successfully')
                window.location.replace('login');
              } else {
                alert('Error occur wen trying to send request')
              }

              $('.getnepass').css('display', 'block')
              $('#loadinggr').css('display', 'none')
            },
          })
        } else {
          alert('Invalid Token trry again')
        }
      } else {
        alert('Password not match')
      }
    } else {
      alert('All field are required')
    }
  })


})
