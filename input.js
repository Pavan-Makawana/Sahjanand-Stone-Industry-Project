function ok()
{

     var wigth,length,mul=0;

    wigth=f1.t1.value;
    length=f1.t2.value;

    wigth=parseInt(wigth);
    length=parseInt(length);

    var count;

    count=f1.t3.value;

    count=parseInt(count);

    mul=wigth*length;

    if(wigth>0 && length>0 && count>=1)
    {
        alert("Order Successful...\n   "+mul+" Square Feet" +"\n   "+count+" qunatity");
    }
    else
    {
        alert("Please Enter Valid Value...");
    }
}