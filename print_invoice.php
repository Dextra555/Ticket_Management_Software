<?php
date_default_timezone_set('America/Los_Angeles');

require('fpdf/fpdf.php');
// require('fpdf/chinese.php');

header('Content-Type: text/html; charset=utf-8');

// require('fpdf/chinese.php');

/*echo $_POST['view_invoice_number'];
echo $_POST['view_toal_amount'];
echo $_POST['view_signature'];
echo $_POST['view_remarks'];
echo $_POST['view_payment_remarks'];
echo $_POST['view_pament_mode'];
echo $_POST['view_invoice_date_time'];
echo $_POST['view_invoice_date'];
echo $_POST['view_email'];
echo $_POST['view_address'];
echo $_POST['view_contact_no'];
echo $_POST['view_name'];*/

$Big5_widths = array(' '=>250,'!'=>250,'"'=>408,'#'=>668,'$'=>490,'%'=>875,'&'=>698,'\''=>250,
    '('=>240,')'=>240,'*'=>417,'+'=>667,','=>250,'-'=>313,'.'=>250,'/'=>520,'0'=>500,'1'=>500,
    '2'=>500,'3'=>500,'4'=>500,'5'=>500,'6'=>500,'7'=>500,'8'=>500,'9'=>500,':'=>250,';'=>250,
    '<'=>667,'='=>667,'>'=>667,'?'=>396,'@'=>921,'A'=>677,'B'=>615,'C'=>719,'D'=>760,'E'=>625,
    'F'=>552,'G'=>771,'H'=>802,'I'=>354,'J'=>354,'K'=>781,'L'=>604,'M'=>927,'N'=>750,'O'=>823,
    'P'=>563,'Q'=>823,'R'=>729,'S'=>542,'T'=>698,'U'=>771,'V'=>729,'W'=>948,'X'=>771,'Y'=>677,
    'Z'=>635,'['=>344,'\\'=>520,']'=>344,'^'=>469,'_'=>500,'`'=>250,'a'=>469,'b'=>521,'c'=>427,
    'd'=>521,'e'=>438,'f'=>271,'g'=>469,'h'=>531,'i'=>250,'j'=>250,'k'=>458,'l'=>240,'m'=>802,
    'n'=>531,'o'=>500,'p'=>521,'q'=>521,'r'=>365,'s'=>333,'t'=>292,'u'=>521,'v'=>458,'w'=>677,
    'x'=>479,'y'=>458,'z'=>427,'{'=>480,'|'=>496,'}'=>480,'~'=>667);

$GB_widths = array(' '=>207,'!'=>270,'"'=>342,'#'=>467,'$'=>462,'%'=>797,'&'=>710,'\''=>239,
    '('=>374,')'=>374,'*'=>423,'+'=>605,','=>238,'-'=>375,'.'=>238,'/'=>334,'0'=>462,'1'=>462,
    '2'=>462,'3'=>462,'4'=>462,'5'=>462,'6'=>462,'7'=>462,'8'=>462,'9'=>462,':'=>238,';'=>238,
    '<'=>605,'='=>605,'>'=>605,'?'=>344,'@'=>748,'A'=>684,'B'=>560,'C'=>695,'D'=>739,'E'=>563,
    'F'=>511,'G'=>729,'H'=>793,'I'=>318,'J'=>312,'K'=>666,'L'=>526,'M'=>896,'N'=>758,'O'=>772,
    'P'=>544,'Q'=>772,'R'=>628,'S'=>465,'T'=>607,'U'=>753,'V'=>711,'W'=>972,'X'=>647,'Y'=>620,
    'Z'=>607,'['=>374,'\\'=>333,']'=>374,'^'=>606,'_'=>500,'`'=>239,'a'=>417,'b'=>503,'c'=>427,
    'd'=>529,'e'=>415,'f'=>264,'g'=>444,'h'=>518,'i'=>241,'j'=>230,'k'=>495,'l'=>228,'m'=>793,
    'n'=>527,'o'=>524,'p'=>524,'q'=>504,'r'=>338,'s'=>336,'t'=>277,'u'=>517,'v'=>450,'w'=>652,
    'x'=>466,'y'=>452,'z'=>407,'{'=>370,'|'=>258,'}'=>370,'~'=>605);

class PDF_reciept extends FPDF 
{ 
    function __construct ($orientation = 'P', $unit = 'pt', $format = 'Letter', $margin = 40) 
    { 
        $this->FPDF($orientation, $unit, $format); 
        $this->SetTopMargin($margin); 
        $this->SetLeftMargin($margin); 
        $this->SetRightMargin($margin); 
        $this->SetAutoPageBreak(true, $margin); 
    } 
    function Header()
    { 
        /*$this->SetFont('helvetica', 'B', 20 ); 
        $this->SetFillColor(238, 238, 238); */
        // $pdf->Image('http://cityiceaircon.com.sg/staffportal/fpdf/cityiceaircon_log.jpg',100,50,400);
        $this->Cell(35, 10);
        // $this->Image('http://cityiceaircon.com.sg/staffportal/fpdf/city_ice_signature_new1.png');
        // $this->Image('http://cityiceaircon.com.sg/staffportal/fpdf/newone_city.png');
        $this->Image('http://cityiceaircon.com.sg/staffportal/fpdf/city_new_header.jpg',100,50,400);

        // $this->SetFillColor(255); 
        /*$this->SetTextColor(0); 
        $this->Cell(0, 5, "", 0, 1, 'C', true); 
        $this->Cell(0, 20, "CITY ICE AIR CONDITIONING", 0, 2, 'C', true); 
        $this->SetFont('helvetica', 'I', 10);
        $this->Cell(0, 15, "Address: 38 Defu Lane 10, #04-01, Sigapore 539215", 0, 3, 'C', true); 
        $this->Cell(0, 15, "E-mail: ciryiceairconditioning@hotmail.com", 0, 4, 'C', true); 
        $this->Cell(0, 15, "Hp: 97687248 / 97484712", 0, 5, 'C', true); 
        $this->Cell(0, 5, "", 0, 6, 'C', true); */
    }

    function Footer()
    { 
        $this->SetFont('helvetica', '', 12); 
        $this->SetTextColor(0); 
        $this->SetXY(40,-60); 
        $this->Cell(0, 30, 'Thank You', 'T', 0, 'C'); 
    }
    
    function PriceTable($service, $no_of_unit, $waranty, $package_price) 
    { 
		$this->SetY(320);
        $this->SetFont('helvetica', 'B', 10); 
        $this->SetTextColor(0); 
        $this->SetFillColor(238, 238, 238); 
        $this->SetLineWidth(1); 
        $this->Cell(260, 25, "Services", 'LTR', 0, 'C', true); 
        $this->Cell(80, 25, "No of Unit(s)", 'LTR', 0, 'C', true); 
        $this->Cell(95, 25, "Warranty(Months)", 'LTR', 0, 'C', true); 
        $this->Cell(95, 25, "Package Price($)", 'LTR', 1, 'C', true); 

        $this->SetFont('helvetica', '', 10);
        $this->SetTextColor(0); 
        $this->SetFillColor(247, 247, 247); 
        $this->SetLineWidth(0); 
        $fill = false; 
            for ($i = 0; $i < count($service); $i++) //count($_POST['service[]'])
            { 
                $this->SetTextColor(0);
                $this->Cell(260, 20, $_POST['service'][$i], 1, 0, 'L', $fill); 
                $this->Cell(80, 20, $_POST['no_of_unit'][$i], 1, 0, 'L', $fill); 
                $this->Cell(95, 20, $_POST['waranty'][$i], 1, 0, 'L', $fill); 
                $this->Cell(95, 20, $_POST['package_price'][$i], 1, 1, 'R', $fill); 
                $fill = !$fill; 
            } 

        $this->SetX(380); 
        $this->SetTextColor(0);         
        $this->Cell(95, 20, "Total", 1); 
        $this->Cell(95, 20, array_sum($_POST['package_price']), 1, 1, 'R'); 
    }

        //Private properties
        var $tmpFiles = array(); 

        /*******************************************************************************
        *                                                                              *
        *                               Public methods                                 *
        *                                                                              *
        *******************************************************************************/
        function Image($file, $x=null, $y=null, $w=0, $h=0, $type='', $link='', $isMask=false, $maskImg=0)
        {
            //Put an image on the page
            if(!isset($this->images[$file]))
            {
                //First use of this image, get info
                if($type=='')
                {
                    $pos=strrpos($file,'.');
                    if(!$pos)
                        $this->Error('Image file has no extension and no type was specified: '.$file);
                    $type=substr($file,$pos+1);
                }
                $type=strtolower($type);
                if($type=='png'){
                    $info=$this->_parsepng($file);
                    if($info=='alpha')
                        return $this->ImagePngWithAlpha($file,$x,$y,$w,$h,$link);
                }
                else
                {
                    if($type=='jpeg')
                        $type='jpg';
                    $mtd='_parse'.$type;
                    if(!method_exists($this,$mtd))
                        $this->Error('Unsupported image type: '.$type);
                    $info=$this->$mtd($file);
                }
                if($isMask){
                    if(in_array($file,$this->tmpFiles))
                        $info['cs']='DeviceGray'; //hack necessary as GD can't produce gray scale images
                    if($info['cs']!='DeviceGray')
                        $this->Error('Mask must be a gray scale image');
                    if($this->PDFVersion<'1.4')
                        $this->PDFVersion='1.4';
                }
                $info['i']=count($this->images)+1;
                if($maskImg>0)
                    $info['masked'] = $maskImg;
                $this->images[$file]=$info;
            }
            else
                $info=$this->images[$file];
            //Automatic width and height calculation if needed
            if($w==0 && $h==0)
            {
                //Put image at 72 dpi
                $w=$info['w']/$this->k;
                $h=$info['h']/$this->k;
            }
            elseif($w==0)
                $w=$h*$info['w']/$info['h'];
            elseif($h==0)
                $h=$w*$info['h']/$info['w'];
            //Flowing mode
            if($y===null)
            {
                if($this->y+$h>$this->PageBreakTrigger && !$this->InHeader && !$this->InFooter && $this->AcceptPageBreak())
                {
                    //Automatic page break
                    $x2=$this->x;
                    $this->AddPage($this->CurOrientation,$this->CurPageFormat);
                    $this->x=$x2;
                }
                $y=$this->y;
                $this->y+=$h;
            }
            if($x===null)
                $x=$this->x;
            if(!$isMask)
                $this->_out(sprintf('q %.2F 0 0 %.2F %.2F %.2F cm /I%d Do Q',$w*$this->k,$h*$this->k,$x*$this->k,($this->h-($y+$h))*$this->k,$info['i']));
            if($link)
                $this->Link($x,$y,$w,$h,$link);
            return $info['i'];
        }

        // needs GD 2.x extension
        // pixel-wise operation, not very fast
        function ImagePngWithAlpha($file,$x,$y,$w=0,$h=0,$link='')
        {
            $tmp_alpha = tempnam('.', 'mska');
            $this->tmpFiles[] = $tmp_alpha;
            $tmp_plain = tempnam('.', 'mskp');
            $this->tmpFiles[] = $tmp_plain;

            list($wpx, $hpx) = getimagesize($file);
            $img = imagecreatefrompng($file);
            $alpha_img = imagecreate( $wpx, $hpx );

            // generate gray scale pallete
            for($c=0;$c<256;$c++)
                ImageColorAllocate($alpha_img, $c, $c, $c);

            // extract alpha channel
            $xpx=0;
            while ($xpx<$wpx){
                $ypx = 0;
                while ($ypx<$hpx){
                    $color_index = imagecolorat($img, $xpx, $ypx);
                    $col = imagecolorsforindex($img, $color_index);
                    imagesetpixel($alpha_img, $xpx, $ypx, $this->_gamma( (127-$col['alpha'])*255/127) );
                    ++$ypx;
                }
                ++$xpx;
            }

            imagepng($alpha_img, $tmp_alpha);
            imagedestroy($alpha_img);

            // extract image without alpha channel
            $plain_img = imagecreatetruecolor ( $wpx, $hpx );
            imagecopy($plain_img, $img, 0, 0, 0, 0, $wpx, $hpx );
            imagepng($plain_img, $tmp_plain);
            imagedestroy($plain_img);
            
            //first embed mask image (w, h, x, will be ignored)
            $maskImg = $this->Image($tmp_alpha, 0,0,0,0, 'PNG', '', true); 
            
            //embed image, masked with previously embedded mask
            $this->Image($tmp_plain,$x,$y,$w,$h,'PNG',$link, false, $maskImg);
        }

        function Close()
        {
            parent::Close();
            // clean up tmp files
            foreach($this->tmpFiles as $tmp)
                @unlink($tmp);
        }

        /*******************************************************************************
        *                                                                              *
        *                               Private methods                                *
        *                                                                              *
        *******************************************************************************/
        function _putimages()
        {
            $filter=($this->compress) ? '/Filter /FlateDecode ' : '';
            reset($this->images);
            while(list($file,$info)=each($this->images))
            {
                $this->_newobj();
                $this->images[$file]['n']=$this->n;
                $this->_out('<</Type /XObject');
                $this->_out('/Subtype /Image');
                $this->_out('/Width '.$info['w']);
                $this->_out('/Height '.$info['h']);

                if(isset($info['masked']))
                    $this->_out('/SMask '.($this->n-1).' 0 R');

                if($info['cs']=='Indexed')
                    $this->_out('/ColorSpace [/Indexed /DeviceRGB '.(strlen($info['pal'])/3-1).' '.($this->n+1).' 0 R]');
                else
                {
                    $this->_out('/ColorSpace /'.$info['cs']);
                    if($info['cs']=='DeviceCMYK')
                        $this->_out('/Decode [1 0 1 0 1 0 1 0]');
                }
                $this->_out('/BitsPerComponent '.$info['bpc']);
                if(isset($info['f']))
                    $this->_out('/Filter /'.$info['f']);
                if(isset($info['parms']))
                    $this->_out($info['parms']);
                if(isset($info['trns']) && is_array($info['trns']))
                {
                    $trns='';
                    for($i=0;$i<count($info['trns']);$i++)
                        $trns.=$info['trns'][$i].' '.$info['trns'][$i].' ';
                    $this->_out('/Mask ['.$trns.']');
                }
                $this->_out('/Length '.strlen($info['data']).'>>');
                $this->_putstream($info['data']);
                unset($this->images[$file]['data']);
                $this->_out('endobj');
                //Palette
                if($info['cs']=='Indexed')
                {
                    $this->_newobj();
                    $pal=($this->compress) ? gzcompress($info['pal']) : $info['pal'];
                    $this->_out('<<'.$filter.'/Length '.strlen($pal).'>>');
                    $this->_putstream($pal);
                    $this->_out('endobj');
                }
            }
        }

        // GD seems to use a different gamma, this method is used to correct it again
        function _gamma($v){
            return pow ($v/255, 2.2) * 255;
        }

        // this method overriding the original version is only needed to make the Image method support PNGs with alpha channels.
        // if you only use the ImagePngWithAlpha method for such PNGs, you can remove it from this script.
        function _parsepng($file)
        {
            //Extract info from a PNG file
            $f=fopen($file,'rb');
            if(!$f)
                $this->Error('Can\'t open image file: '.$file);
            //Check signature
            if($this->_readstream($f,8)!=chr(137).'PNG'.chr(13).chr(10).chr(26).chr(10))
                $this->Error('Not a PNG file: '.$file);
            //Read header chunk
            $this->_readstream($f,4);
            if($this->_readstream($f,4)!='IHDR')
                $this->Error('Incorrect PNG file: '.$file);
            $w=$this->_readint($f);
            $h=$this->_readint($f);
            $bpc=ord($this->_readstream($f,1));
            if($bpc>8)
                $this->Error('16-bit depth not supported: '.$file);
            $ct=ord($this->_readstream($f,1));
            if($ct==0)
                $colspace='DeviceGray';
            elseif($ct==2)
                $colspace='DeviceRGB';
            elseif($ct==3)
                $colspace='Indexed';
            else {
                fclose($f);      // the only changes are 
                return 'alpha';  // made in those 2 lines
            }
            if(ord($this->_readstream($f,1))!=0)
                $this->Error('Unknown compression method: '.$file);
            if(ord($this->_readstream($f,1))!=0)
                $this->Error('Unknown filter method: '.$file);
            if(ord($this->_readstream($f,1))!=0)
                $this->Error('Interlacing not supported: '.$file);
            $this->_readstream($f,4);
            $parms='/DecodeParms <</Predictor 15 /Colors '.($ct==2 ? 3 : 1).' /BitsPerComponent '.$bpc.' /Columns '.$w.'>>';
            //Scan chunks looking for palette, transparency and image data
            $pal='';
            $trns='';
            $data='';
            do
            {
                $n=$this->_readint($f);
                $type=$this->_readstream($f,4);
                if($type=='PLTE')
                {
                    //Read palette
                    $pal=$this->_readstream($f,$n);
                    $this->_readstream($f,4);
                }
                elseif($type=='tRNS')
                {
                    //Read transparency info
                    $t=$this->_readstream($f,$n);
                    if($ct==0)
                        $trns=array(ord(substr($t,1,1)));
                    elseif($ct==2)
                        $trns=array(ord(substr($t,1,1)), ord(substr($t,3,1)), ord(substr($t,5,1)));
                    else
                    {
                        $pos=strpos($t,chr(0));
                        if($pos!==false)
                            $trns=array($pos);
                    }
                    $this->_readstream($f,4);
                }
                elseif($type=='IDAT')
                {
                    //Read image data block
                    $data.=$this->_readstream($f,$n);
                    $this->_readstream($f,4);
                }
                elseif($type=='IEND')
                    break;
                else
                    $this->_readstream($f,$n+4);
            }
            while($n);
            if($colspace=='Indexed' && empty($pal))
                $this->Error('Missing palette in '.$file);
            fclose($f);
            return array('w'=>$w, 'h'=>$h, 'cs'=>$colspace, 'bpc'=>$bpc, 'f'=>'FlateDecode', 'parms'=>$parms, 'pal'=>$pal, 'trns'=>$trns, 'data'=>$data);
        }

        /*starting from here itself*/
            var $widths;
            var $aligns;

            function SetWidths($w)
            {
                //Set the array of column widths
                $this->widths=$w;
            }

            function SetAligns($a)
            {
                //Set the array of column alignments
                $this->aligns=$a;
            }

            function Row($data)
            {
                //Calculate the height of the row
                $nb=0;
                for($i=0;$i<count($data);$i++)
                    //$nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
                $h=15*$nb;
                //Issue a page break first if needed
                $this->CheckPageBreak($h);
                //Draw the cells of the row
                for($i=0;$i<count($data);$i++)
                {
                    $w=$this->widths[$i];
                    $a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
                    //Save the current position
                    $x=$this->GetX();
                    $y=$this->GetY();
                    //Draw the border
                    $this->Rect($x,$y,$w,$h);
                    //Print the text
                    $this->MultiCell($w,10,$data[$i],0,$a);
                    //Put the position to the right of the cell
                    $this->SetXY($x+$w,$y);
                }
                //Go to the next line
                $this->Ln($h);
            }

            function CheckPageBreak($h)
            {
                //If the height h would cause an overflow, add a new page immediately
                if($this->GetY()+$h>$this->PageBreakTrigger)
                    $this->AddPage($this->CurOrientation);
            }

            function NbLines($w,$txt)
            {
                //Computes the number of lines a MultiCell of width w will take
                $cw=&$this->CurrentFont['cw'];
                if($w==0)
                    $w=$this->w-$this->rMargin-$this->x;
                $wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
                $s=str_replace("\r",'',$txt);
                $nb=strlen($s);
                if($nb>0 and $s[$nb-1]=="\n")
                    $nb--;
                $sep=-1;
                $i=0;
                $j=0;
                $l=0;
                $nl=1;
                while($i<$nb)
                {
                    $c=$s[$i];
                    if($c=="\n")
                    {
                        $i++;
                        $sep=-1;
                        $j=$i;
                        $l=0;
                        $nl++;
                        continue;
                    }
                    if($c==' ')
                        $sep=$i;
                    $l+=$cw[$c];
                    if($l>$wmax)
                    {
                        if($sep==-1)
                        {
                            if($i==$j)
                                $i++;
                        }
                        else
                            $i=$sep+1;
                        $sep=-1;
                        $j=$i;
                        $l=0;
                        $nl++;
                    }
                    else
                        $i++;
                }
                return $nl;
            }

            function AddCIDFont($family, $style, $name, $cw, $CMap, $registry)
                {
                    $fontkey = strtolower($family).strtoupper($style);
                    if(isset($this->fonts[$fontkey]))
                        $this->Error("Font already added: $family $style");
                    $i = count($this->fonts)+1;
                    $name = str_replace(' ','',$name);
                    $this->fonts[$fontkey] = array('i'=>$i, 'type'=>'Type0', 'name'=>$name, 'up'=>-130, 'ut'=>40, 'cw'=>$cw, 'CMap'=>$CMap, 'registry'=>$registry);
                }

                function AddCIDFonts($family, $name, $cw, $CMap, $registry)
                {
                    $this->AddCIDFont($family,'',$name,$cw,$CMap,$registry);
                    $this->AddCIDFont($family,'B',$name.',Bold',$cw,$CMap,$registry);
                    $this->AddCIDFont($family,'I',$name.',Italic',$cw,$CMap,$registry);
                    $this->AddCIDFont($family,'BI',$name.',BoldItalic',$cw,$CMap,$registry);
                }

                function AddBig5Font($family='Big5', $name='MSungStd-Light-Acro')
                {
                    // Add Big5 font with proportional Latin
                    $cw = $GLOBALS['Big5_widths'];
                    $CMap = 'ETenms-B5-H';
                    $registry = array('ordering'=>'CNS1', 'supplement'=>0);
                    $this->AddCIDFonts($family,$name,$cw,$CMap,$registry);
                }

                function AddBig5hwFont($family='Big5-hw', $name='MSungStd-Light-Acro')
                {
                    // Add Big5 font with half-witdh Latin
                    for($i=32;$i<=126;$i++)
                        $cw[chr($i)] = 500;
                    $CMap = 'ETen-B5-H';
                    $registry = array('ordering'=>'CNS1', 'supplement'=>0);
                    $this->AddCIDFonts($family,$name,$cw,$CMap,$registry);
                }
                function AddHKFont($family='HKFont') 
                { 
                $cw=$GLOBALS['Big5_widths']; 
                $name='MSungStd-Light-Acro'; 
                $CMap='HKscs-B5-H'; 
                $registry=array('ordering'=>'CNS1','supplement'=>0); 
                $this->AddCIDFont($family,'',$name,$cw,$CMap,$registry); 
                $this->AddCIDFont($family,'B',$name.',Bold',$cw,$CMap,$registry); 
                $this->AddCIDFont($family,'I',$name.',Italic',$cw,$CMap,$registry); 
                $this->AddCIDFont($family,'BI',$name.',BoldItalic',$cw,$CMap,$registry); 
                } 
                function AddGBFont($family='GB', $name='STSongStd-Light-Acro')
                {
                    // Add GB font with proportional Latin
                    $cw = $GLOBALS['GB_widths'];
                    $CMap = 'GBKp-EUC-H';
                    $registry = array('ordering'=>'GB1', 'supplement'=>2);
                    $this->AddCIDFonts($family,$name,$cw,$CMap,$registry);
                }

                function AddGBhwFont($family='GB-hw', $name='STSongStd-Light-Acro')
                {
                    // Add GB font with half-width Latin
                    for($i=32;$i<=126;$i++)
                        $cw[chr($i)] = 500;
                    $CMap = 'GBK-EUC-H';
                    $registry = array('ordering'=>'GB1', 'supplement'=>2);
                    $this->AddCIDFonts($family,$name,$cw,$CMap,$registry);
                }

                function GetStringWidth($s)
                {
                    if($this->CurrentFont['type']=='Type0')
                        return $this->GetMBStringWidth($s);
                    else
                        return parent::GetStringWidth($s);
                }

                function GetMBStringWidth($s)
                {
                    // Multi-byte version of GetStringWidth()
                    $l = 0;
                    $cw = &$this->CurrentFont['cw'];
                    $nb = strlen($s);
                    $i = 0;
                    while($i<$nb)
                    {
                        $c = $s[$i];
                        if(ord($c)<128)
                        {
                            $l += $cw[$c];
                            $i++;
                        }
                        else
                        {
                            $l += 1000;
                            $i += 2;
                        }
                    }
                    return $l*$this->FontSize/1000;
                }

                function MultiCell($w, $h, $txt, $border=0, $align='L', $fill=0)
                {
                    if($this->CurrentFont['type']=='Type0')
                        $this->MBMultiCell($w,$h,$txt,$border,$align,$fill);
                    else
                        parent::MultiCell($w,$h,$txt,$border,$align,$fill);
                }

                function MBMultiCell($w, $h, $txt, $border=0, $align='L', $fill=0)
                {
                    // Multi-byte version of MultiCell()
                    $cw = &$this->CurrentFont['cw'];
                    if($w==0)
                        $w = $this->w-$this->rMargin-$this->x;
                    $wmax = ($w-2*$this->cMargin)*1000/$this->FontSize;
                    $s = str_replace("\r",'',$txt);
                    $nb = strlen($s);
                    if($nb>0 && $s[$nb-1]=="\n")
                        $nb--;
                    $b = 0;
                    if($border)
                    {
                        if($border==1)
                        {
                            $border = 'LTRB';
                            $b = 'LRT';
                            $b2 = 'LR';
                        }
                        else
                        {
                            $b2 = '';
                            if(is_int(strpos($border,'L')))
                                $b2 .= 'L';
                            if(is_int(strpos($border,'R')))
                                $b2 .= 'R';
                            $b = is_int(strpos($border,'T')) ? $b2.'T' : $b2;
                        }
                    }
                    $sep = -1;
                    $i = 0;
                    $j = 0;
                    $l = 0;
                    $nl = 1;
                    while($i<$nb)
                    {
                        // Get next character
                        $c = $s[$i];
                        // Check if ASCII or MB
                        $ascii = (ord($c)<128);
                        if($c=="\n")
                        {
                            // Explicit line break
                            $this->Cell($w,$h,substr($s,$j,$i-$j),$b,2,$align,$fill);
                            $i++;
                            $sep = -1;
                            $j = $i;
                            $l = 0;
                            $nl++;
                            if($border && $nl==2)
                                $b = $b2;
                            continue;
                        }
                        if(!$ascii)
                        {
                            $sep = $i;
                            $ls = $l;
                        }
                        elseif($c==' ')
                        {
                            $sep = $i;
                            $ls = $l;
                        }
                        $l += $ascii ? $cw[$c] : 1000;
                        if($l>$wmax)
                        {
                            // Automatic line break
                            if($sep==-1 || $i==$j)
                            {
                                if($i==$j)
                                    $i += $ascii ? 1 : 2;
                                $this->Cell($w,$h,substr($s,$j,$i-$j),$b,2,$align,$fill);
                            }
                            else
                            {
                                $this->Cell($w,$h,substr($s,$j,$sep-$j),$b,2,$align,$fill);
                                $i = ($s[$sep]==' ') ? $sep+1 : $sep;
                            }
                            $sep = -1;
                            $j = $i;
                            $l = 0;
                            $nl++;
                            if($border && $nl==2)
                                $b = $b2;
                        }
                        else
                            $i += $ascii ? 1 : 2;
                    }
                    // Last chunk
                    if($border && is_int(strpos($border,'B')))
                        $b .= 'B';
                    $this->Cell($w,$h,substr($s,$j,$i-$j),$b,2,$align,$fill);
                    $this->x = $this->lMargin;
                }

                function Write($h, $txt, $link='')
                {
                    if($this->CurrentFont['type']=='Type0')
                        $this->MBWrite($h,$txt,$link);
                    else
                        parent::Write($h,$txt,$link);
                }

                function MBWrite($h, $txt, $link)
                {
                    // Multi-byte version of Write()
                    $cw = &$this->CurrentFont['cw'];
                    $w = $this->w-$this->rMargin-$this->x;
                    $wmax = ($w-2*$this->cMargin)*1000/$this->FontSize;
                    $s = str_replace("\r",'',$txt);
                    $nb = strlen($s);
                    $sep = -1;
                    $i = 0;
                    $j = 0;
                    $l = 0;
                    $nl = 1;
                    while($i<$nb)
                    {
                        // Get next character
                        $c = $s[$i];
                        // Check if ASCII or MB
                        $ascii = (ord($c)<128);
                        if($c=="\n")
                        {
                            // Explicit line break
                            $this->Cell($w,$h,substr($s,$j,$i-$j),0,2,'',0,$link);
                            $i++;
                            $sep = -1;
                            $j = $i;
                            $l = 0;
                            if($nl==1)
                            {
                                $this->x = $this->lMargin;
                                $w = $this->w-$this->rMargin-$this->x;
                                $wmax = ($w-2*$this->cMargin)*1000/$this->FontSize;
                            }
                            $nl++;
                            continue;
                        }
                        if(!$ascii || $c==' ')
                            $sep = $i;
                        $l += $ascii ? $cw[$c] : 1000;
                        if($l>$wmax)
                        {
                            // Automatic line break
                            if($sep==-1 || $i==$j)
                            {
                                if($this->x>$this->lMargin)
                                {
                                    // Move to next line
                                    $this->x = $this->lMargin;
                                    $this->y += $h;
                                    $w = $this->w-$this->rMargin-$this->x;
                                    $wmax = ($w-2*$this->cMargin)*1000/$this->FontSize;
                                    $i++;
                                    $nl++;
                                    continue;
                                }
                                if($i==$j)
                                    $i += $ascii ? 1 : 2;
                                $this->Cell($w,$h,substr($s,$j,$i-$j),0,2,'',0,$link);
                            }
                            else
                            {
                                $this->Cell($w,$h,substr($s,$j,$sep-$j),0,2,'',0,$link);
                                $i = ($s[$sep]==' ') ? $sep+1 : $sep;
                            }
                            $sep = -1;
                            $j = $i;
                            $l = 0;
                            if($nl==1)
                            {
                                $this->x = $this->lMargin;
                                $w = $this->w-$this->rMargin-$this->x;
                                $wmax = ($w-2*$this->cMargin)*1000/$this->FontSize;
                            }
                            $nl++;
                        }
                        else
                            $i += $ascii ? 1 : 2;
                    }
                    // Last chunk
                    if($i!=$j)
                        $this->Cell($l/1000*$this->FontSize,$h,substr($s,$j,$i-$j),0,0,'',0,$link);
                }

                function _putType0($font)
                {
                    // Type0
                    $this->_newobj();
                    $this->_out('<</Type /Font');
                    $this->_out('/Subtype /Type0');
                    $this->_out('/BaseFont /'.$font['name'].'-'.$font['CMap']);
                    $this->_out('/Encoding /'.$font['CMap']);
                    $this->_out('/DescendantFonts ['.($this->n+1).' 0 R]');
                    $this->_out('>>');
                    $this->_out('endobj');
                    // CIDFont
                    $this->_newobj();
                    $this->_out('<</Type /Font');
                    $this->_out('/Subtype /CIDFontType0');
                    $this->_out('/BaseFont /'.$font['name']);
                    $this->_out('/CIDSystemInfo <</Registry '.$this->_textstring('Adobe').' /Ordering '.$this->_textstring($font['registry']['ordering']).' /Supplement '.$font['registry']['supplement'].'>>');
                    $this->_out('/FontDescriptor '.($this->n+1).' 0 R');
                    if($font['CMap']=='ETen-B5-H')
                        $W = '13648 13742 500';
                    elseif($font['CMap']=='GBK-EUC-H')
                        $W = '814 907 500 7716 [500]';
                    else
                        $W = '1 ['.implode(' ',$font['cw']).']';
                    $this->_out('/W ['.$W.']>>');
                    $this->_out('endobj');
                    // Font descriptor
                    $this->_newobj();
                    $this->_out('<</Type /FontDescriptor');
                    $this->_out('/FontName /'.$font['name']);
                    $this->_out('/Flags 6');
                    $this->_out('/FontBBox [0 -200 1000 900]');
                    $this->_out('/ItalicAngle 0');
                    $this->_out('/Ascent 800');
                    $this->_out('/Descent -200');
                    $this->_out('/CapHeight 800');
                    $this->_out('/StemV 50');
                    $this->_out('>>');
                    $this->_out('endobj');
                }
           

            /*End here itserlf mult cell's*/

}
      /*  function GenerateWord()
            {
                //Get a random word
                $nb=rand(3,10);
                $w='';
                for($i=1;$i<=$nb;$i++)
                    $w.=chr(rand(ord('a'),ord('z')));
                return $w;
            }

            function GenerateSentence()
            {
                //Get a random sentence
                $nb=rand(1,10);
                $s='';
                for($i=1;$i<=$nb;$i++)
                    $s.=GenerateWord().' ';
                return substr($s,0,-1);
            }*/


        $pdf = new PDF_reciept(); 
        $pdf->AddPage(); 
        $pdf->SetFont('helvetica', '', 10);
        // echo $_POST['view_name'].'here is the name of the cusomter';
        $pdf->SetY(150);
        $pdf->SetFont('helvetica', 'B'); 
        $pdf->Cell(70, 10, "Name:"); 
       

        /*  

        $pdf->AddGBFont(); 
        $pdf->SetFont('GB','',10);

        $pdf->AddBig5hwFont(); 
        $pdf->SetFont('Big5-hw','',10); 

        $pdf->AddHKFont(); 
        $pdf->SetFont('HKFont','',10);

        */

        // $pdf->Cell(70, 10, "季彬"); 
        // $matches = array('1' => 季, '2' => 彬);
        // $pdf->Cell(70, 10,  $matches[2]); 


/*$c= utf8_decode($_POST['view_name'])
echo $c;*/
 $pdf->SetFont('helvetica', ''); 
      $strlength = strlen($_POST['view_name']);
if($strlength > 35){
$pdf->MultiCell(200, 10, $_POST['view_name']);
}
else{
	$pdf->Cell(80, 10, $_POST['view_name']);
}

        $pdf->SetX(340); 
        //$pdf->Cell(100, 13, $_POST['name']);
        $pdf->SetFont('helvetica', 'B', 10); 
        $pdf->Cell(100, 13, 'Invoice No:'); 
        $pdf->SetFont('helvetica', ''); 
        $pdf->Cell(100, 13, $_POST['view_invoice_number'], 0, 1);

        $pdf->SetX(340); 
        $pdf->Cell(100, 15,'', 0, 2); 
        $pdf->SetFont('helvetica', 'B'); 
        $pdf->Cell(100, 15, 'Invoice Date:'); 
        $pdf->SetFont('helvetica', ''); 

        $pdf->Cell(100, 15, $_POST['view_invoice_date'].' '.$_POST['view_invoice_date_time'],0, 1); 

        $pdf->SetX(340); 
        $pdf->Cell(100, 15,'', 0, 2); 
        $pdf->SetFont('helvetica', 'B'); 
        $pdf->Cell(100, 15, 'Payment By:'); 
        $pdf->SetFont('helvetica', ''); 
        $pdf->Cell(100, 15, $_POST['view_pament_mode'], 0, 1);


        $pdf->SetX(340); 
        $pdf->Cell(100, 15,'', 0, 2); 
        $pdf->SetFont('helvetica', 'B'); 
        $pdf->Cell(100, 15, 'Servicing By:'); 
        $pdf->SetFont('helvetica', ''); 
        $pdf->Cell(100, 15, $_POST['view_service_by'], 0, 1);


        $pdf->SetX(340); 
        $pdf->Cell(100, 15,'', 0, 2); 
        $pdf->SetFont('helvetica', 'B'); 
        $pdf->Cell(100, 15, 'Servicing Date:'); 
        $pdf->SetFont('helvetica', ''); 
        $pdf->Cell(100, 15, $_POST['view_service_date'], 0, 1);


        $pdf->SetY(180);
        $pdf->SetFont('helvetica', 'B'); 
        $pdf->Cell(70, 13, 'Contact No:'); 
        $pdf->SetFont('helvetica', ''); 
        $pdf->Cell(70, 13, $_POST['view_contact_no'], 0, 1);


        $pdf->SetY(230);
        $pdf->SetFont('helvetica', 'B'); 
        $pdf->Cell(70, 13, 'Address:'); 
        $pdf->SetFont('helvetica', ''); 
        $pdf->SetLineWidth(0.2);
        $pdf->SetY(250);

        // $pdf->MultiCell(190,10,$pdf->WriteHTML($_POST['view_address']));
        // $pdf->Cell(70, 13, $_POST['view_address'], 0, 1);

        $pdf->Row(array($_POST['view_address']));


        $pdf->SetY(205);
        $pdf->SetFont('helvetica', 'B'); 
        $pdf->Cell(70, 13, 'Email:'); 
        $pdf->SetFont('helvetica', ''); 
        $pdf->Cell(70, 13, $_POST['view_email'], 0, 1);


       /*  $pdf->SetY(207);
        $pdf->SetFont('helvetica', 'B'); 
        $pdf->Cell(70, 13, 'Contact No:'); 
        $pdf->SetFont('helvetica', ''); 
        $pdf->Cell(70, 13, $_POST['view_contact_no'], 0, 1);*/

        /*$pdf->SetX(200); 
        $pdf->SetFont('Arial', 'I'); 
        $pdf->Cell(200, 15, 'am', 0, 2); 
        $pdf->Cell(200, 15,'here' . ', ' . 'vijay', 0, 2); 
        $pdf->Cell(200, 15, 'surya' . ' ' . 'kamal',0,2); 
        $pdf->Cell(200, 15, 'vijay' . ' ' . 'kamal'); 
        $pdf->Ln(100);*/

/*Lign space*/

         $pdf->Ln(70);

/* Lign applied here*/
        /*$pdf->Cell(0, 30, '', 'T', 1, 'C');

        $pdf->SetY(260);
        $pdf->SetFont('helvetica', 'B'); 
        $pdf->SetTextColor(1, 162, 232); 
        $pdf->Cell(100, 13, "Services"); 
        
        $pdf->SetX(300);
        $pdf->SetFont('helvetica', 'B'); 
        $pdf->SetTextColor(1, 162, 232); 
        $pdf->Cell(100, 13, "No of Unit(s)"); 

        $pdf->SetX(380);
        $pdf->SetFont('helvetica', 'B'); 
        $pdf->SetTextColor(1, 162, 232); 
        $pdf->Cell(100, 13, "Warranty(Months)");

        $pdf->SetX(480);
        $pdf->SetFont('helvetica', 'B'); 
        $pdf->Cell(100, 13, "Package Price ($)", 0, 1); 
            
        $pdf->Cell(0, 30, '', 'T', 2, 'C');*/

// Process started here 

        /*$pdf->SetY(280);
        $pdf->SetFont('helvetica', 'B'); 
        $pdf->SetTextColor(1, 162, 232); 
        $pdf->Cell(100, 13, "Services"); */
 
        $pdf->PriceTable($_POST['service'], $_POST['no_of_unit'], $_POST['waranty'], $_POST['package_price']);


        $pdf->SetFont('helvetica', 'U', 12); 
        $pdf->SetTextColor(1, 162, 232); 
         
        $pdf->SetFont('Arial','',10);

        //Table with 20 rows and 4 columns
        // $pdf->SetWidths($_POST['view_remarks']);
        // for($i=0;$i<1;$i++)
       
        $pdf->SetY(470);
        $pdf->SetFont('helvetica', 'B'); 
        $pdf->SetTextColor(0); 
        $pdf->Cell(130, 13, "Payment Remarks:"); 
        $pdf->SetFont('helvetica', '',10); 
        $pdf->Cell(100, 13, $_POST['view_payment_remarks'], 0, 1);

        $pdf->SetY(500);
        $pdf->SetFont('helvetica', 'B'); 
        $pdf->SetTextColor(0); 
        $pdf->Cell(130, 13, "Remarks:"); 
        $pdf->SetFont('helvetica', '',10); 
        $pdf->SetLineWidth(0.2);

       // $pdf->Cell(100, 13, $_POST['view_remarks'],0,1);
        // echo $_POST['view_remarks'];
        $pdf->Row(array($_POST['view_remarks']));

        $pdf->SetY(580); 
        $pdf->SetFont('helvetica', '',8); 
        $pdf->SetFont('helvetica', 'B'); 
        $pdf->SetTextColor(0); 
        $pdf->Cell(130, 13, "1. Cheque Payment would be payable to CITY ICE AIR CONDITIONING"); 

        $pdf->SetY(590);
        $pdf->SetFont('helvetica', 'B'); 
        $pdf->SetTextColor(0); 
        $pdf->Cell(130, 13, "2. Bank transfer payment would be payable to OCBC CURRENT ACCOUNT 629867623001"); 
        $pdf->SetFont('helvetica', '',8); 

        $pdf->SetY(600);
        $pdf->SetFont('helvetica', 'B'); 
        $pdf->SetTextColor(0); 
        $pdf->Cell(130, 13, "3. Cheque/Internet banking payment should be made within 7 days, else 10% interest will be charge for over period."); 
        $pdf->SetFont('helvetica', '',8); 

        $pdf->SetY(700);
        $pdf->SetFont('helvetica', 'B'); 
        $pdf->SetTextColor(1, 162, 232);
        $pdf->Cell(100, 13, "Customer Signature");

        // echo $_POST['view_signature'];
        // $pdf->Output('reciept.pdf', 'F');//$_POST['view_signature'];

        $pdf->Image('http://cityiceaircon.com.sg/staffportal/uploads/customer_signs/'.$_POST['view_signature'],41,645,100);

        // $pdf->Output();

        // $pdf->Output($_POST['view_invoice_number'].'.pdf',F);

        $pdf->Output();

?>