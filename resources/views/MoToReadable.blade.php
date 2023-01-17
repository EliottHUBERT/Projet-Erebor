<script>
function Go(ClassName) {
    myCells = document.getElementsByClassName(ClassName);
    console.log(myCells);

    for (let i = 0; i < myCells.length; i++){

        var value = myCells[i].innerHTML;
        value = parseFloat(value.substr(0, value.length-2));
        if(value>=1024){
                value = (value/1024).toFixed(2);
                myCells[i].innerHTML = value+" Go"
            }
        else if(value<1){

            value = (value*1024).toFixed(2);
            myCells[i].innerHTML = value+" Ko"

            if(value < 1){
                value = (value*1024).toFixed(2);
                myCells[i].innerHTML = value+" octets"
            }
            }


    }
}
</script>
