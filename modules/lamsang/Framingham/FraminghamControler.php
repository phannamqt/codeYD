<?php

/*  include("..\class\ketnoiCSDL\class.sqlserver.php");
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
  
             function SelectAllByGioiTinhLoaiChiSo($IsMale,$LoaiChiSo)
                {
    
                    $SQLServer= new SQLServer;
                    $storename='{call spFraminghamScores_SelectAllByGioiTinhLoaiChiSo (?,?)}';
                    $params =array($IsMale,$LoaiChiSo);    
                    $get_Framingham=$SQLServer->query($storename, $params);
                    $excute= new SQLServerResult($get_Framingham);
                    $array_return= $excute->get_as_array();
                    return $array_return ;
                }
                
                function  GetPointScore($GiaTriDeSoSanh,$IsMale,$LoaiChiSo)
                {
                    $point1=0;
                        $dmFraminghamScore= SelectAllByGioiTinhLoaiChiSo($IsMale,$LoaiChiSo);
                        foreach($dmFraminghamScore as $itemFraminghamScore )
                    {
                        if (($GiaTriDeSoSanh >=  $itemFraminghamScore['CanDuoi']) && ($GiaTriDeSoSanh <= $itemFraminghamScore['CanTren']))
                        {
                            $point1   =$itemFraminghamScore['Points'];
                            break;
                        }
                    }
                    return $point1;

                }
                
                function SelectAllByLoaiChiSoOptions($LoaiChiSo,$IsMale,$IsSmoker,$Isdiabetes,$IsTreated,$IsLVH,$IsCHD,$IsValve,$IsDiabetesValve,$IsSex,$IsCigs,$IsCVD,$IsAF,$IsMummer,$IsHF)
                {
                    $SQLServer= new SQLServer;
                    $storename='{call spFraminghamScores_SelectAllByLoaiChiSoOptions (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}';
                    $params =array($LoaiChiSo,$IsMale,$IsSmoker,$Isdiabetes,$IsTreated,$IsLVH,$IsCHD,$IsValve,$IsDiabetesValve,$IsSex,$IsCigs,$IsCVD,$IsAF,$IsMummer,$IsHF);    
                    $get_Framingham=$SQLServer->query($storename, $params);
                    $excute= new SQLServerResult($get_Framingham);
                    $array_return= $excute->get_as_array();
                    return $array_return ;
                }
                function GetPointScoreByOption($LoaiChiSo,$IsMale,$IsSmoker,$Isdiabetes,$IsTreated,$IsLVH,$IsCHD,$IsValve,$IsDiabetesValve,$IsSex,$IsCigs,$IsCVD,$IsAF,$IsMummer,$IsHF)
                {
                    $point=0;
                     $dmFraminghamScore= SelectAllByLoaiChiSoOptions($LoaiChiSo,$IsMale,$IsSmoker,$Isdiabetes,$IsTreated,$IsLVH,$IsCHD,$IsValve,$IsDiabetesValve,$IsSex,$IsCigs,$IsCVD,$IsAF,$IsMummer,$IsHF);
                    foreach($dmFraminghamScore as $itemFraminghamScore )
                    {
                        
                       if (($itemFraminghamScore != null) && (count($itemFraminghamScore) > 0))
                        {
                            $point   =$itemFraminghamScore['Points'];
                            break;
                        }
                    }
                    return $point;
                    
                }
                function GetPointScore2($GiaTriDeSoSanh,$LoaiChiSo,$IsMale,$IsSmoker,$Isdiabetes,$IsTreated,$IsLVH,$IsCHD,$IsValve,$IsDiabetesValve,$IsSex,$IsCigs,$IsCVD,$IsAF,$IsMummer,$IsHF)
                 {
                  $point=0;
                     
                       $dmFraminghamScore= SelectAllByLoaiChiSoOptions($LoaiChiSo,$IsMale,$IsSmoker,$Isdiabetes,$IsTreated,$IsLVH,$IsCHD,$IsValve,$IsDiabetesValve,$IsSex,$IsCigs,$IsCVD,$IsAF,$IsMummer,$IsHF);
                
                      
                        foreach($dmFraminghamScore as $itemFraminghamScore )
                    {
                        if (($GiaTriDeSoSanh >=  $itemFraminghamScore['CanDuoi']) && ($GiaTriDeSoSanh <= $itemFraminghamScore['CanTren']))
                        {
                            $point   =$itemFraminghamScore['Points'];
                            break;
                        }
                    }
                    return $point;
                          
                      
                    
                }
                function SelectPercentByPoints($LoaiChiSo,$IsMale,$TotalScore)
                {
                    $SQLServer= new SQLServer;
                    $storename='{call GD2_spFraminghamScoreTotal_SelectByPoints (?,?,?)}';
                    $params =array($LoaiChiSo,$IsMale,$TotalScore);  
                    $get_Framingham=$SQLServer->query($storename, $params);
                    $excute= new SQLServerResult($get_Framingham);
                    $array_return= $excute->get_as_array();
                    return $array_return[0]['PercentScore'] ;
                }
               
?>

