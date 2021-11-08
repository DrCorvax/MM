function checkForm(obj)
{
 var from = obj.from.value;
 var email = obj.email.value;
 var subj = obj.subject.value;
 var msg = obj.message.value;
 
 from=from.replace(/\s*/g,'');
 email=email.replace(/\s*/g,'');

 var reg_mail = /[0-9a-z_]+@[0-9a-z_^.]+.[a-z]{2,3}/i;
 var reg_sender = /[a-ÿ,0-9]/i;

 // check 'From'
 if(reg_sender.exec(from)==null)
 {
  alert("Invalid \"From\" field.");
  return false;
 }
 
 // check 'E-mail'
 if(reg_mail.exec(email)==null)
 {
  alert("Invalid \"E-mail\" field.");
  return false;
 }
 
 // check 'Subject'
 if(subj=="")
 {
  alert("Message subject is empty.");
  return false;
 }
 
 // check 'Message'
 if(msg=="")
 {
  alert("Your message is empty.");
  return false;
 }
 
 return true;
}
