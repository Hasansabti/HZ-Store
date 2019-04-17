
@extends('layouts.app')

@section('content')

<section>

<div class="WordSection1">


    <div class="row">
        <div class="col-lg-6">
<table class=TableGrid border=0 cellspacing=0 cellpadding=0 width=0
 style='width:719.8pt;margin-left:-.5in;border-collapse:collapse'>
 <tr style='height:24.6pt'>
  <td width=40 valign=top style='width:31.55pt;border-top:black;border-left:
  black;border-bottom:gray;border-right:gray;border-style:solid;border-width:
  1.0pt;padding:.85pt 0in 0in 0in;height:24.6pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:1.1pt;margin-bottom:.0001pt'><span style='font-size:9.0pt;
  line-height:107%;font-family:"Segoe UI",sans-serif'>ID</span></p>
  </td>
  <td width=34 valign=bottom style='width:26.55pt;border-top:solid black 1.0pt;
  border-left:none;border-bottom:solid gray 1.0pt;border-right:solid gray 1.0pt;
  padding:.85pt 0in 0in 0in;height:24.6pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'><img width=16 height=16
  id="Picture 8" src="{{asset('storage/img/sched/image001.jpg')}}"></p>
  </td>
  <td width=53 valign=top style='width:41.3pt;border-top:solid black 1.0pt;
  border-left:none;border-bottom:solid gray 1.0pt;border-right:solid gray 1.0pt;
  padding:.85pt 0in 0in 0in;height:24.6pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'><span style='font-size:9.0pt;
  line-height:107%;font-family:"Segoe UI",sans-serif'>Task </span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'><span style='font-size:9.0pt;
  line-height:107%;font-family:"Segoe UI",sans-serif'>Mode</span></p>
  </td>
  <td width=132 colspan=2 valign=top style='width:100.35pt;border-top:solid black 1.0pt;
  border-left:none;border-bottom:solid gray 1.0pt;border-right:solid gray 1.0pt;
  padding:.85pt 0in 0in 0in;height:24.6pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'><span style='font-size:9.0pt;
  line-height:107%;font-family:"Segoe UI",sans-serif'>Task Name</span></p>
  </td>
  <td width=80 valign=top style='width:60.95pt;border-top:solid black 1.0pt;
  border-left:none;border-bottom:solid gray 1.0pt;border-right:solid gray 1.0pt;
  padding:.85pt 0in 0in 0in;height:24.6pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'><span style='font-size:9.0pt;
  line-height:107%;font-family:"Segoe UI",sans-serif'>Duration</span></p>
  </td>
  <td width=80 valign=top style='width:60.95pt;border-top:solid black 1.0pt;
  border-left:none;border-bottom:solid gray 1.0pt;border-right:solid gray 1.0pt;
  padding:.85pt 0in 0in 0in;height:24.6pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'><span style='font-size:9.0pt;
  line-height:107%;font-family:"Segoe UI",sans-serif'>Start</span></p>
  </td>
  <td width=111 valign=top style='width:85.6pt;border-top:solid black 1.0pt;
  border-left:none;border-bottom:solid gray 1.0pt;border-right:solid gray 1.0pt;
  padding:.85pt 0in 0in 0in;height:24.6pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'><span style='font-size:9.0pt;
  line-height:107%;font-family:"Segoe UI",sans-serif'>Finish</span></p>
  </td>
  <td width=105 valign=top style='width:80.65pt;border-top:solid black 1.0pt;
  border-left:none;border-bottom:solid gray 1.0pt;border-right:solid gray 1.0pt;
  padding:.85pt 0in 0in 0in;height:24.6pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'><span style='font-size:9.0pt;
  line-height:107%;font-family:"Segoe UI",sans-serif'>Predecessors</span></p>
  </td>
  <td width=105 valign=top style='width:80.65pt;border-top:solid black 1.0pt;
  border-left:none;border-bottom:solid gray 1.0pt;border-right:solid gray 1.0pt;
  padding:.85pt 0in 0in 0in;height:24.6pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'><span style='font-size:9.0pt;
  line-height:107%;font-family:"Segoe UI",sans-serif'>Resource Names</span></p>
  </td>
  <td width=60 valign=bottom style='width:45.95pt;border-top:solid black 1.0pt;
  border-left:none;border-bottom:solid gray 1.0pt;border-right:none;padding:
  .85pt 0in 0in 0in;height:24.6pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:2.75pt;margin-bottom:.0001pt;text-align:justify;text-justify:
  inter-ideograph'><span style='font-size:8.0pt;line-height:107%;font-family:
  "Segoe UI",sans-serif'>2018 Febru</span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt'>    <span
  style='font-size:8.0pt;line-height:107%;font-family:"Segoe UI",sans-serif'>01        04</span></p>
  </td>
  <td width=72 colspan=2 valign=bottom style='width:36.95pt;border-top:solid black 1.0pt;
  border-left:none;border-bottom:solid gray 1.0pt;border-right:none;padding:
  .85pt 0in 0in 0in;height:24.6pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:-.05in;margin-bottom:.0001pt'><span style='font-size:8.0pt;
  line-height:107%;font-family:"Segoe UI",sans-serif'>ary</span></p>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:0in;
  margin-bottom:0in;margin-left:9.15pt;margin-bottom:.0001pt;text-align:center'><span
  style='font-size:8.0pt;line-height:107%;font-family:"Segoe UI",sans-serif'>07</span></p>
  </td>
  <td width=35 valign=bottom style='width:27.6pt;border-top:solid black 1.0pt;
  border-left:none;border-bottom:solid gray 1.0pt;border-right:none;padding:
  .85pt 0in 0in 0in;height:24.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center'><span style='font-size:8.0pt;line-height:107%;font-family:
  "Segoe UI",sans-serif'>10</span></p>
  </td>
  <td width=35 valign=bottom style='width:27.6pt;border-top:solid black 1.0pt;
  border-left:none;border-bottom:solid gray 1.0pt;border-right:none;padding:
  .85pt 0in 0in 0in;height:24.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center'><span style='font-size:8.0pt;line-height:107%;font-family:
  "Segoe UI",sans-serif'>13</span></p>
  </td>
  <td width=17 valign=bottom style='width:13.1pt;border-top:solid black 1.0pt;
  border-left:none;border-bottom:solid gray 1.0pt;border-right:solid black 1.0pt;
  padding:.85pt 0in 0in 0in;height:24.6pt'>
  <p class=MsoNormal align=right style='margin-top:0in;margin-right:-.7pt;
  margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;text-align:right'><span
  style='font-size:8.0pt;line-height:107%;font-family:"Segoe UI",sans-serif'>1</span></p>
  </td>
  <td style='height:24.6pt;border:none' width=0 height=33></td>
 </tr>
 <tr style='height:7.9pt'>
  <td width=40 rowspan=3 valign=top style='width:31.55pt;border-top:none;
  border-left:solid black 1.0pt;border-bottom:solid gray 1.0pt;border-right:
  solid gray 1.0pt;padding:.85pt 0in 0in 0in;height:7.9pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:0in;
  margin-bottom:0in;margin-left:.15pt;margin-bottom:.0001pt;text-align:center'><span
  style='font-size:9.0pt;line-height:107%;font-family:"Segoe UI",sans-serif'>1</span></p>
  </td>
  <td width=34 rowspan=3 style='width:26.55pt;border-top:none;border-left:none;
  border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:7.9pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=53 rowspan=3 valign=top style='width:41.3pt;border-top:none;
  border-left:none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:7.9pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:1.1pt;margin-bottom:.0001pt'><img width=16 height=16
  id="Picture 19" src="{{asset('storage/img/sched/image002.gif')}}"></p>
  </td>
  <td width=132 colspan=2 rowspan=3 valign=top style='width:100.35pt;
  border-top:none;border-left:none;border-bottom:solid #D4D4D4 1.0pt;
  border-right:solid #D4D4D4 1.0pt;padding:.85pt 0in 0in 0in;height:7.9pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'>Requirements Specifications</p>
  </td>
  <td width=80 rowspan=3 valign=top style='width:60.95pt;border-top:none;
  border-left:none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:7.9pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'>19 days</p>
  </td>
  <td width=80 rowspan=3 valign=top style='width:60.95pt;border-top:none;
  border-left:none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:7.9pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'>Tue </p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'>18/02/06</p>
  </td>
  <td width=111 rowspan=3 valign=top style='width:85.6pt;border-top:none;
  border-left:none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:7.9pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'>Tue 18/03/06</p>
  </td>
  <td width=105 rowspan=3 style='width:80.65pt;border-top:none;border-left:
  none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:7.9pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=105 rowspan=3 style='width:80.65pt;border-top:none;border-left:
  none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid gray 1.0pt;
  padding:.85pt 0in 0in 0in;height:7.9pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=60 rowspan=11 style='width:45.95pt;border-top:none;border-left:
  none;border-bottom:solid gray 1.0pt;border-right:solid gray 1.0pt;padding:
  .85pt 0in 0in 0in;height:7.9pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=72 colspan=2 style='width:36.95pt;border:none;padding:.85pt 0in 0in 0in;
  height:7.9pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=35 valign=top style='width:27.6pt;border:none;border-bottom:solid #74CCD4 6.0pt;
  padding:.85pt 0in 0in 0in;height:7.9pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=35 style='width:27.6pt;border:none;border-bottom:solid #74CCD4 6.0pt;
  padding:.85pt 0in 0in 0in;height:7.9pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=17 style='width:13.1pt;border-top:none;border-left:none;border-bottom:
  solid #74CCD4 6.0pt;border-right:solid black 1.0pt;padding:.85pt 0in 0in 0in;
  height:7.9pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td style='height:7.9pt;border:none' width=0 height=11></td>
 </tr>
 <tr style='height:3.25pt'>
  <td width=12 rowspan=10 style='width:4.9pt;border:none;border-bottom:solid gray 1.0pt;
  padding:.85pt 0in 0in 0in;height:3.25pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=60 rowspan=10 valign=top style='width:32.1pt;border:none;
  border-bottom:solid gray 1.0pt;padding:.85pt 0in 0in 0in;height:3.25pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=35 rowspan=10 valign=top style='width:27.6pt;border:none;
  border-bottom:solid gray 1.0pt;padding:.85pt 0in 0in 0in;height:3.25pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=35 rowspan=10 style='width:27.6pt;border:none;border-bottom:solid gray 1.0pt;
  padding:.85pt 0in 0in 0in;height:3.25pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=17 rowspan=10 style='width:13.1pt;border-top:none;border-left:none;
  border-bottom:solid gray 1.0pt;border-right:solid black 1.0pt;padding:.85pt 0in 0in 0in;
  height:3.25pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td style='height:3.25pt;border:none' width=0 height=4></td>
 </tr>
 <tr style='height:16.95pt'>
  <span style='font-size:11.0pt;line-height:107%;font-family:"Calibri",sans-serif;
  color:black'>
  <td style='height:16.95pt;border:none' width=0 height=23></td>
  </span>
 </tr>
 <tr style='height:15.6pt'>
  <td width=40 valign=top style='width:31.55pt;border-top:none;border-left:
  solid black 1.0pt;border-bottom:solid gray 1.0pt;border-right:solid gray 1.0pt;
  padding:.85pt 0in 0in 0in;height:15.6pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:0in;
  margin-bottom:0in;margin-left:.15pt;margin-bottom:.0001pt;text-align:center'><span
  style='font-size:9.0pt;line-height:107%;font-family:"Segoe UI",sans-serif'>2</span></p>
  </td>
  <td width=34 valign=top style='width:26.55pt;border-top:none;border-left:
  none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:15.6pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=53 valign=top style='width:41.3pt;border-top:none;border-left:none;
  border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:15.6pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:1.1pt;margin-bottom:.0001pt'><img width=16 height=16
  id="Picture 34" src="{{asset('storage/img/sched/image002.gif')}}"></p>
  </td>
  <td width=132 colspan=2 valign=top style='width:100.35pt;border-top:none;
  border-left:none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:15.6pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'>SDS</p>
  </td>
  <td width=80 valign=top style='width:60.95pt;border-top:none;border-left:
  none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:15.6pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'>17.5 days</p>
  </td>
  <td width=80 valign=top style='width:60.95pt;border-top:none;border-left:
  none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:15.6pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:-1.55pt;margin-bottom:
  0in;margin-left:.95pt;margin-bottom:.0001pt;text-align:justify;text-justify:
  inter-ideograph'>Tue 18/03/06</p>
  </td>
  <td width=111 valign=top style='width:85.6pt;border-top:none;border-left:
  none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:15.6pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'>Sun 18/04/01</p>
  </td>
  <td width=105 valign=top style='width:80.65pt;border-top:none;border-left:
  none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:15.6pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=105 valign=top style='width:80.65pt;border-top:none;border-left:
  none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid gray 1.0pt;
  padding:.85pt 0in 0in 0in;height:15.6pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <span style='font-size:11.0pt;line-height:107%;font-family:"Calibri",sans-serif;
  color:black'>
  <td style='height:15.6pt;border:none' width=0 height=21></td>
  </span>
 </tr>
 <tr style='height:28.1pt'>
  <td width=40 valign=top style='width:31.55pt;border-top:none;border-left:
  solid black 1.0pt;border-bottom:solid gray 1.0pt;border-right:solid gray 1.0pt;
  padding:.85pt 0in 0in 0in;height:28.1pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:0in;
  margin-bottom:0in;margin-left:.15pt;margin-bottom:.0001pt;text-align:center'><span
  style='font-size:9.0pt;line-height:107%;font-family:"Segoe UI",sans-serif'>3</span></p>
  </td>
  <td width=34 valign=top style='width:26.55pt;border-top:none;border-left:
  none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:28.1pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=53 valign=top style='width:41.3pt;border-top:none;border-left:none;
  border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:28.1pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:1.1pt;margin-bottom:.0001pt'><img width=16 height=16
  id="Picture 47" src="{{asset('storage/img/sched/image002.gif')}}"></p>
  </td>
  <td width=132 colspan=2 valign=top style='width:100.35pt;border-top:none;
  border-left:none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:28.1pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'>Use cases and sequence diagrams</p>
  </td>
  <td width=80 valign=top style='width:60.95pt;border-top:none;border-left:
  none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:28.1pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'>2 days</p>
  </td>
  <td width=80 valign=top style='width:60.95pt;border-top:none;border-left:
  none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:28.1pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'>Tue </p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'>18/04/03</p>
  </td>
  <td width=111 valign=top style='width:85.6pt;border-top:none;border-left:
  none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:28.1pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'>Wed 18/04/04</p>
  </td>
  <td width=105 valign=top style='width:80.65pt;border-top:none;border-left:
  none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:28.1pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=105 valign=top style='width:80.65pt;border-top:none;border-left:
  none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid gray 1.0pt;
  padding:.85pt 0in 0in 0in;height:28.1pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <span style='font-size:11.0pt;line-height:107%;font-family:"Calibri",sans-serif;
  color:black'>
  <td style='height:28.1pt;border:none' width=0 height=37></td>
  </span>
 </tr>
 <tr style='height:41.65pt'>
  <td width=40 valign=top style='width:31.55pt;border-top:none;border-left:
  solid black 1.0pt;border-bottom:solid gray 1.0pt;border-right:solid gray 1.0pt;
  padding:.85pt 0in 0in 0in;height:41.65pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:0in;
  margin-bottom:0in;margin-left:.15pt;margin-bottom:.0001pt;text-align:center'><span
  style='font-size:9.0pt;line-height:107%;font-family:"Segoe UI",sans-serif'>4</span></p>
  </td>
  <td width=34 valign=top style='width:26.55pt;border-top:none;border-left:
  none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:41.65pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=53 valign=top style='width:41.3pt;border-top:none;border-left:none;
  border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:41.65pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:1.1pt;margin-bottom:.0001pt'><img width=16 height=16
  id="Picture 62" src="{{asset('storage/img/sched/image002.gif')}}"></p>
  </td>
  <td width=132 colspan=2 valign=top style='width:100.35pt;border-top:none;
  border-left:none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:41.65pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'>Activity </p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt;text-align:justify;text-justify:inter-ideograph'>diagrams/state
  charts</p>
  </td>
  <td width=80 valign=top style='width:60.95pt;border-top:none;border-left:
  none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:41.65pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'>3 days</p>
  </td>
  <td width=80 valign=top style='width:60.95pt;border-top:none;border-left:
  none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:41.65pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'>Sun </p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'>18/04/08</p>
  </td>
  <td width=111 valign=top style='width:85.6pt;border-top:none;border-left:
  none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:41.65pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'>Wed 18/04/11</p>
  </td>
  <td width=105 valign=top style='width:80.65pt;border-top:none;border-left:
  none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:41.65pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=105 valign=top style='width:80.65pt;border-top:none;border-left:
  none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid gray 1.0pt;
  padding:.85pt 0in 0in 0in;height:41.65pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <span style='font-size:11.0pt;line-height:107%;font-family:"Calibri",sans-serif;
  color:black'>
  <td style='height:41.65pt;border:none' width=0 height=56></td>
  </span>
 </tr>
 <tr style='height:28.1pt'>
  <td width=40 valign=top style='width:31.55pt;border-top:none;border-left:
  solid black 1.0pt;border-bottom:solid gray 1.0pt;border-right:solid gray 1.0pt;
  padding:.85pt 0in 0in 0in;height:28.1pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:0in;
  margin-bottom:0in;margin-left:.15pt;margin-bottom:.0001pt;text-align:center'><span
  style='font-size:9.0pt;line-height:107%;font-family:"Segoe UI",sans-serif'>5</span></p>
  </td>
  <td width=34 valign=top style='width:26.55pt;border-top:none;border-left:
  none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:28.1pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=53 valign=top style='width:41.3pt;border-top:none;border-left:none;
  border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:28.1pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:1.1pt;margin-bottom:.0001pt'><img width=16 height=16
  id="Picture 77" src="{{asset('storage/img/sched/image002.gif')}}"></p>
  </td>
  <td width=132 colspan=2 valign=top style='width:100.35pt;border-top:none;
  border-left:none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:28.1pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'>ERD and class diagram</p>
  </td>
  <td width=80 valign=top style='width:60.95pt;border-top:none;border-left:
  none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:28.1pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'>4 days</p>
  </td>
  <td width=80 valign=top style='width:60.95pt;border-top:none;border-left:
  none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:28.1pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'>Sun </p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'>18/04/15</p>
  </td>
  <td width=111 valign=top style='width:85.6pt;border-top:none;border-left:
  none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:28.1pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'>Thu 18/04/19</p>
  </td>
  <td width=105 valign=top style='width:80.65pt;border-top:none;border-left:
  none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:28.1pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=105 valign=top style='width:80.65pt;border-top:none;border-left:
  none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid gray 1.0pt;
  padding:.85pt 0in 0in 0in;height:28.1pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <span style='font-size:11.0pt;line-height:107%;font-family:"Calibri",sans-serif;
  color:black'>
  <td style='height:28.1pt;border:none' width=0 height=37></td>
  </span>
 </tr>
 <tr style='height:15.6pt'>
  <td width=40 valign=top style='width:31.55pt;border-top:none;border-left:
  solid black 1.0pt;border-bottom:solid gray 1.0pt;border-right:solid gray 1.0pt;
  padding:.85pt 0in 0in 0in;height:15.6pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:0in;
  margin-bottom:0in;margin-left:.15pt;margin-bottom:.0001pt;text-align:center'><span
  style='font-size:9.0pt;line-height:107%;font-family:"Segoe UI",sans-serif'>6</span></p>
  </td>
  <td width=34 valign=top style='width:26.55pt;border-top:none;border-left:
  none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:15.6pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=53 valign=top style='width:41.3pt;border-top:none;border-left:none;
  border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:15.6pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:1.1pt;margin-bottom:.0001pt'><img width=16 height=16
  id="Picture 92" src="{{asset('storage/img/sched/image002.gif')}}"></p>
  </td>
  <td width=132 colspan=2 valign=top style='width:100.35pt;border-top:none;
  border-left:none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:15.6pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'>Implementation</p>
  </td>
  <td width=80 valign=top style='width:60.95pt;border-top:none;border-left:
  none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:15.6pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'>8 days</p>
  </td>
  <td width=80 valign=top style='width:60.95pt;border-top:none;border-left:
  none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:15.6pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:-1.45pt;margin-bottom:
  0in;margin-left:.95pt;margin-bottom:.0001pt;text-align:justify;text-justify:
  inter-ideograph'>Sun 18/04/15</p>
  </td>
  <td width=111 valign=top style='width:85.6pt;border-top:none;border-left:
  none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:15.6pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'>Wed 18/04/25</p>
  </td>
  <td width=105 valign=top style='width:80.65pt;border-top:none;border-left:
  none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:15.6pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=105 valign=top style='width:80.65pt;border-top:none;border-left:
  none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid gray 1.0pt;
  padding:.85pt 0in 0in 0in;height:15.6pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <span style='font-size:11.0pt;line-height:107%;font-family:"Calibri",sans-serif;
  color:black'>
  <td style='height:15.6pt;border:none' width=0 height=21></td>
  </span>
 </tr>
 <tr style='height:15.6pt'>
  <td width=40 valign=top style='width:31.55pt;border-top:none;border-left:
  solid black 1.0pt;border-bottom:solid gray 1.0pt;border-right:solid gray 1.0pt;
  padding:.85pt 0in 0in 0in;height:15.6pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:0in;
  margin-bottom:0in;margin-left:.15pt;margin-bottom:.0001pt;text-align:center'><span
  style='font-size:9.0pt;line-height:107%;font-family:"Segoe UI",sans-serif'>7</span></p>
  </td>
  <td width=34 valign=top style='width:26.55pt;border-top:none;border-left:
  none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:15.6pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=53 valign=top style='width:41.3pt;border-top:none;border-left:none;
  border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:15.6pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:1.1pt;margin-bottom:.0001pt'><img width=16 height=16
  id="Picture 105" src="{{asset('storage/img/sched/image002.gif')}}"></p>
  </td>
  <td width=132 colspan=2 valign=top style='width:100.35pt;border-top:none;
  border-left:none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:15.6pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'>Testing</p>
  </td>
  <td width=80 valign=top style='width:60.95pt;border-top:none;border-left:
  none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:15.6pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'>3 days</p>
  </td>
  <td width=80 valign=top style='width:60.95pt;border-top:none;border-left:
  none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:15.6pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:-1.45pt;margin-bottom:
  0in;margin-left:.95pt;margin-bottom:.0001pt;text-align:justify;text-justify:
  inter-ideograph'>Sun 18/04/22</p>
  </td>
  <td width=111 valign=top style='width:85.6pt;border-top:none;border-left:
  none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:15.6pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'>Wed 18/04/25</p>
  </td>
  <td width=105 valign=top style='width:80.65pt;border-top:none;border-left:
  none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:15.6pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=105 valign=top style='width:80.65pt;border-top:none;border-left:
  none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid gray 1.0pt;
  padding:.85pt 0in 0in 0in;height:15.6pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <span style='font-size:11.0pt;line-height:107%;font-family:"Calibri",sans-serif;
  color:black'>
  <td style='height:15.6pt;border:none' width=0 height=21></td>
  </span>
 </tr>
 <tr style='height:15.6pt'>
  <td width=40 valign=top style='width:31.55pt;border-top:none;border-left:
  solid black 1.0pt;border-bottom:solid gray 1.0pt;border-right:solid gray 1.0pt;
  padding:.85pt 0in 0in 0in;height:15.6pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:0in;
  margin-bottom:0in;margin-left:.15pt;margin-bottom:.0001pt;text-align:center'><span
  style='font-size:9.0pt;line-height:107%;font-family:"Segoe UI",sans-serif'>8</span></p>
  </td>
  <td width=34 valign=top style='width:26.55pt;border-top:none;border-left:
  none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:15.6pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=53 valign=top style='width:41.3pt;border-top:none;border-left:none;
  border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:15.6pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:1.1pt;margin-bottom:.0001pt'><img width=16 height=16
  id="Picture 118" src="{{asset('storage/img/sched/image002.gif')}}"></p>
  </td>
  <td width=132 colspan=2 valign=top style='width:100.35pt;border-top:none;
  border-left:none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:15.6pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'>Finishing up</p>
  </td>
  <td width=80 valign=top style='width:60.95pt;border-top:none;border-left:
  none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:15.6pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'>1 day</p>
  </td>
  <td width=80 valign=top style='width:60.95pt;border-top:none;border-left:
  none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:15.6pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:-.35pt;margin-bottom:
  0in;margin-left:.95pt;margin-bottom:.0001pt;text-align:justify;text-justify:
  inter-ideograph'>Wed 18/04/2</p>
  </td>
  <td width=111 valign=top style='width:85.6pt;border-top:none;border-left:
  none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:15.6pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'>Wed 18/04/25</p>
  </td>
  <td width=105 valign=top style='width:80.65pt;border-top:none;border-left:
  none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:15.6pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=105 valign=top style='width:80.65pt;border-top:none;border-left:
  none;border-bottom:solid #D4D4D4 1.0pt;border-right:solid gray 1.0pt;
  padding:.85pt 0in 0in 0in;height:15.6pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <span style='font-size:11.0pt;line-height:107%;font-family:"Calibri",sans-serif;
  color:black'>
  <td style='height:15.6pt;border:none' width=0 height=21></td>
  </span>
 </tr>
 <tr style='height:28.1pt'>
  <td width=40 valign=top style='width:31.55pt;border-top:none;border-left:
  solid black 1.0pt;border-bottom:solid gray 1.0pt;border-right:solid gray 1.0pt;
  padding:.85pt 0in 0in 0in;height:28.1pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:0in;
  margin-bottom:0in;margin-left:.15pt;margin-bottom:.0001pt;text-align:center'><span
  style='font-size:9.0pt;line-height:107%;font-family:"Segoe UI",sans-serif'>9</span></p>
  </td>
  <td width=34 valign=top style='width:26.55pt;border-top:none;border-left:
  none;border-bottom:solid gray 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:28.1pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=53 valign=top style='width:41.3pt;border-top:none;border-left:none;
  border-bottom:solid gray 1.0pt;border-right:solid #D4D4D4 1.0pt;padding:.85pt 0in 0in 0in;
  height:28.1pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:1.1pt;margin-bottom:.0001pt'><img width=16 height=16
  id="Picture 132" src="{{asset('storage/img/sched/image002.gif')}}"></p>
  </td>
  <td width=132 colspan=2 valign=top style='width:100.35pt;border-top:none;
  border-left:none;border-bottom:solid gray 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:28.1pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'>Demo and presentation</p>
  </td>
  <td width=80 valign=top style='width:60.95pt;border-top:none;border-left:
  none;border-bottom:solid gray 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:28.1pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'>1 day</p>
  </td>
  <td width=80 valign=top style='width:60.95pt;border-top:none;border-left:
  none;border-bottom:solid gray 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:28.1pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'>Thu </p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'>18/04/26</p>
  </td>
  <td width=111 valign=top style='width:85.6pt;border-top:none;border-left:
  none;border-bottom:solid gray 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:28.1pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.95pt;margin-bottom:.0001pt'>Thu 18/04/26</p>
  </td>
  <td width=105 valign=top style='width:80.65pt;border-top:none;border-left:
  none;border-bottom:solid gray 1.0pt;border-right:solid #D4D4D4 1.0pt;
  padding:.85pt 0in 0in 0in;height:28.1pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=105 valign=top style='width:80.65pt;border-top:none;border-left:
  none;border-bottom:solid gray 1.0pt;border-right:solid gray 1.0pt;padding:
  .85pt 0in 0in 0in;height:28.1pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <span style='font-size:11.0pt;line-height:107%;font-family:"Calibri",sans-serif;
  color:black'>
  <td style='height:28.1pt;border:none' width=0 height=37></td>
  </span>
 </tr>
 <tr style='height:156.55pt'>
  <td width=128 colspan=3 valign=top style='width:99.4pt;border-top:none;
  border-left:solid black 1.0pt;border-bottom:solid black 1.0pt;border-right:
  none;padding:.85pt 0in 0in 0in;height:156.55pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=508 colspan=6 valign=top style='width:388.5pt;border:none;
  border-bottom:solid black 1.0pt;padding:.85pt 0in 0in 0in;height:156.55pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=105 valign=top style='width:80.65pt;border:none;border-bottom:solid black 1.0pt;
  padding:.85pt 0in 0in 0in;height:156.55pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=60 valign=top style='width:45.95pt;border:none;border-bottom:solid black 1.0pt;
  padding:.85pt 0in 0in 0in;height:156.55pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=72 colspan=2 valign=top style='width:36.95pt;border:none;
  border-bottom:solid black 1.0pt;padding:.85pt 0in 0in 0in;height:156.55pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=35 valign=top style='width:27.6pt;border:none;border-bottom:solid black 1.0pt;
  padding:.85pt 0in 0in 0in;height:156.55pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=35 valign=top style='width:27.6pt;border:none;border-bottom:solid black 1.0pt;
  padding:.85pt 0in 0in 0in;height:156.55pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=17 valign=top style='width:13.1pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:.85pt 0in 0in 0in;
  height:156.55pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td style='height:156.55pt;border:none' width=0 height=209></td>
 </tr>
 <tr style='height:119.9pt'>
  <td width=128 colspan=3 style='width:99.4pt;border-top:none;border-left:solid black 1.0pt;
  border-bottom:solid black 1.0pt;border-right:none;padding:.85pt 0in 0in 0in;
  height:119.9pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:4.55pt;margin-bottom:.0001pt'><span style='font-size:10.0pt;
  line-height:107%;font-family:"Segoe UI",sans-serif'>Project: Project1</span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:4.55pt;margin-bottom:.0001pt'><span style='font-size:10.0pt;
  line-height:107%;font-family:"Segoe UI",sans-serif'>Date: Wed 18/04/25</span></p>
  </td>
  <td width=61 valign=top style='width:45.6pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:.85pt 0in 0in 0in;
  height:119.9pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=447 colspan=5 style='width:342.9pt;border:none;border-bottom:solid black 1.0pt;
  padding:.85pt 0in 0in 0in;height:119.9pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:4.7pt;
  margin-left:10.7pt'><img width=98 height=140
  src="{{asset('storage/img/sched/image003.gif')}}" align=left hspace=12><img width=98
  height=141 src="{{asset('storage/img/sched/image004.gif')}}" align=left hspace=12><span
  style='font-size:8.0pt;line-height:107%;font-family:"Segoe UI",sans-serif'>TaskInactive
  Summary</span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:4.7pt;
  margin-left:10.7pt'><span style='font-size:8.0pt;line-height:107%;font-family:
  "Segoe UI",sans-serif'>SplitManual Task</span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:4.7pt;
  margin-left:10.7pt'><span style='font-size:8.0pt;line-height:107%;font-family:
  "Segoe UI",sans-serif'>MilestoneDuration-only</span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:4.7pt;
  margin-left:10.7pt'><span style='font-size:8.0pt;line-height:107%;font-family:
  "Segoe UI",sans-serif'>SummaryManual Summary Rollup</span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:4.7pt;
  margin-left:10.7pt'><span style='font-size:8.0pt;line-height:107%;font-family:
  "Segoe UI",sans-serif'>Project SummaryManual Summary</span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:4.75pt;
  margin-left:10.7pt'><span style='font-size:8.0pt;line-height:107%;font-family:
  "Segoe UI",sans-serif'>Inactive TaskStart-only</span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:10.7pt;margin-bottom:.0001pt'><span style='font-size:8.0pt;
  line-height:107%;font-family:"Segoe UI",sans-serif'>Inactive
  MilestoneFinish-only</span></p>
  </td>
  <td width=105 valign=top style='width:80.65pt;border:none;border-bottom:solid black 1.0pt;
  padding:.85pt 0in 0in 0in;height:119.9pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:4.7pt;
  margin-left:.4pt'><img width=7 height=97
  src="{{asset('storage/img/sched/image005.gif')}}" align=left hspace=12><span
  style='font-size:8.0pt;line-height:107%;font-family:"Segoe UI",sans-serif'>External
  Tasks</span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:-.9pt;margin-bottom:
  4.7pt;margin-left:.4pt'><span style='font-size:8.0pt;line-height:107%;
  font-family:"Segoe UI",sans-serif'>External Milestone</span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:4.7pt;
  margin-left:.4pt'><span style='font-size:8.0pt;line-height:107%;font-family:
  "Segoe UI",sans-serif'>Deadline</span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:4.7pt;
  margin-left:.4pt'><span style='font-size:8.0pt;line-height:107%;font-family:
  "Segoe UI",sans-serif'>Progress</span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:.4pt;margin-bottom:.0001pt'><span style='font-size:8.0pt;
  line-height:107%;font-family:"Segoe UI",sans-serif'>Manual Progress</span></p>
  </td>
  <td width=60 valign=top style='width:45.95pt;border:none;border-bottom:solid black 1.0pt;
  padding:.85pt 0in 0in 0in;height:119.9pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:27.4pt;margin-bottom:.0001pt'><img width=11 height=33
  id="Group 7046" src="{{asset('storage/img/sched/image006.gif')}}"></p>
  </td>
  <td width=72 colspan=2 valign=top style='width:36.95pt;border:none;
  border-bottom:solid black 1.0pt;padding:.85pt 0in 0in 0in;height:119.9pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:-16.6pt;margin-bottom:
  44.9pt;margin-left:-18.45pt'><img width=97 height=10 id="Group 7051"
  src="{{asset('storage/img/sched/image007.gif')}}"></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:-16.6pt;margin-bottom:
  0in;margin-left:-18.45pt;margin-bottom:.0001pt'><img width=97 height=25
  id="Group 7052" src="{{asset('storage/img/sched/image008.gif')}}"></p>
  </td>
  <td width=35 valign=top style='width:27.6pt;border:none;border-bottom:solid black 1.0pt;
  padding:.85pt 0in 0in 0in;height:119.9pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=35 valign=top style='width:27.6pt;border:none;border-bottom:solid black 1.0pt;
  padding:.85pt 0in 0in 0in;height:119.9pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=17 valign=top style='width:13.1pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:.85pt 0in 0in 0in;
  height:119.9pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td style='height:119.9pt;border:none' width=0 height=160></td>
 </tr>
 <tr style='height:22.3pt'>
  <td width=128 colspan=3 valign=top style='width:99.4pt;border-top:none;
  border-left:solid black 1.0pt;border-bottom:solid black 1.0pt;border-right:
  none;padding:.85pt 0in 0in 0in;height:22.3pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=508 colspan=6 valign=top style='width:388.5pt;border:none;
  border-bottom:solid black 1.0pt;padding:.85pt 0in 0in 0in;height:22.3pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:0in;
  margin-bottom:0in;margin-left:132.55pt;margin-bottom:.0001pt;text-align:center'><span
  style='font-size:10.0pt;line-height:107%;font-family:"Segoe UI",sans-serif'>Page
  1</span></p>
  </td>
  <td width=105 valign=top style='width:80.65pt;border:none;border-bottom:solid black 1.0pt;
  padding:.85pt 0in 0in 0in;height:22.3pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=60 valign=top style='width:45.95pt;border:none;border-bottom:solid black 1.0pt;
  padding:.85pt 0in 0in 0in;height:22.3pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=72 colspan=2 valign=top style='width:36.95pt;border:none;
  border-bottom:solid black 1.0pt;padding:.85pt 0in 0in 0in;height:22.3pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=35 valign=top style='width:27.6pt;border:none;border-bottom:solid black 1.0pt;
  padding:.85pt 0in 0in 0in;height:22.3pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=35 valign=top style='width:27.6pt;border:none;border-bottom:solid black 1.0pt;
  padding:.85pt 0in 0in 0in;height:22.3pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td width=17 valign=top style='width:13.1pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:.85pt 0in 0in 0in;
  height:22.3pt'>
  <p class=MsoNormal>&nbsp;</p>
  </td>
  <td style='height:22.3pt;border:none' width=0 height=30></td>
 </tr>
 <tr height=0>
  <td width=40 style='border:none'></td>
  <td width=34 style='border:none'></td>
  <td width=53 style='border:none'></td>
  <td width=61 style='border:none'></td>
  <td width=71 style='border:none'></td>
  <td width=80 style='border:none'></td>
  <td width=80 style='border:none'></td>
  <td width=111 style='border:none'></td>
  <td width=105 style='border:none'></td>
  <td width=105 style='border:none'></td>
  <td width=60 style='border:none'></td>
  <td width=12 style='border:none'></td>
  <td width=60 style='border:none'></td>
  <td width=35 style='border:none'></td>
  <td width=35 style='border:none'></td>
  <td width=17 style='border:none'></td>
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>
 </tr>
</table>
</div>
        <div class="col-lg-3">
<p class=MsoNormal style='margin-top:0.5in;margin-right:-36.05pt;margin-bottom:
0in;margin-left:-36.55pt;margin-bottom:.0001pt'><img width=961 height=721
id="Picture 7262" src="{{asset('storage/img/sched/image009.gif')}}"></p>
</div>
</div>
</div>
</section>

        @endsection
