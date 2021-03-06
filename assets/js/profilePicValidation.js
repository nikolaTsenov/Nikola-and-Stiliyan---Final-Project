var _validFileExtensions = [".jpg", ".jpeg", ".bmp", ".png"];
/**
 * 
 * @param oForm
 * @returns alert if the file is not in _validFileExtensions format
 */
function Validate(oForm) {
    var arrInputs = oForm.getElementsByTagName("input");
    for (var i = 0; i < arrInputs.length; i++) {
        var oInput = arrInputs[i];
        if (oInput.type == "file") {
            var sFileName = oInput.value;
            if (sFileName.length > 0) {
                var blnValid = false;
                for (var j = 0; j < _validFileExtensions.length; j++) {
                    var sCurExtension = _validFileExtensions[j];
                    if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                        blnValid = true;
                        break;
                    }
                }
                
                if (!blnValid) {
                    alert("Съжаляваме, " + sFileName + " не е валидно, позволени формати са: " + _validFileExtensions.join(", "));
                    return false;
                }
            }
        }
    }
  
    return true;
}