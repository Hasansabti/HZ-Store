
@extends('layouts.app')

@section('content')

    <div class="container" style="background-color: white">

<div class=WordSection1>

<div style='border:none;border-top:solid windowtext 4.5pt;padding:1.0pt 0in 0in 0in'>

<p class=line>&nbsp;</p>

</div>

<h1 class=MsoTitle>System Design Specification</h1>

<p class=MsoTitle style='margin-top:0in;margin-right:0in;margin-bottom:20.0pt;
margin-left:0in'><span style='font-size:20.0pt'>for</span></p>

<p class=MsoNormal align=center style='text-align:center;line-height:150%'><b><span
style='font-size:18.0pt;line-height:150%;font-family:"Times New Roman",serif'>(HZ-Electronics)</span></b></p>

<p class=MsoNormal align=center style='text-align:center;line-height:150%'><b><span
style='font-size:18.0pt;line-height:150%;font-family:"Times New Roman",serif'>&nbsp;</span></b></p>

<p class=MsoNormal style='line-height:150%'><b><span style='line-height:150%;
font-family:"Times New Roman",serif'>&nbsp;</span></b></p>

<p class=MsoNormal align=center style='text-align:center;line-height:150%'><b><span
style='line-height:150%;font-family:"Times New Roman",serif'>By </span></b></p>

<p class=MsoNormal align=center style='text-align:center;line-height:150%'><span
style='line-height:150%;font-family:"Times New Roman",serif'>Abdulaziz
Alshammari (214020239)</span></p>

<p class=MsoNormal align=center style='text-align:center;line-height:150%'><span
style='line-height:150%;font-family:"Times New Roman",serif'>Hassan Alsabti
(214021371)</span></p>

<p class=MsoNormal style='line-height:150%'><b><span style='line-height:150%;
font-family:"Times New Roman",serif'>&nbsp;</span></b></p>

<p class=MsoNormal align=center style='text-align:center;line-height:150%'><b><span
style='line-height:150%;font-family:"Times New Roman",serif'>Instructor</span></b></p>

<p class=MsoNormal align=center style='text-align:center;line-height:150%'><span
style='font-size:13.5pt;line-height:150%;color:black'>Dr.Numan</span></p>

<p class=MsoNormal align=center style='text-align:center;line-height:150%'><b><span
style='line-height:150%;font-family:"Times New Roman",serif'>&nbsp;</span></b></p>

<p class=MsoNormal align=center style='text-align:center;line-height:150%'><b><span
style='line-height:150%;font-family:"Times New Roman",serif'>April 2018</span></b></p>

</div>

<b><span style='font-size:16.0pt;font-family:"Arial",sans-serif'><br clear=all
style='page-break-before:always'>
</span></b>

<div class=WordSection2>

<p class=TOCEntry><a name="_Toc344877432"></a><a name="_Toc344879822"></a><a
name="_Toc346508722"></a><a name="_Toc346508952"></a><a name="_Toc346509227"></a>Table
of Contents</p>

<p class=MsoToc1>1.<span
style='font-size:11.0pt;font-family:"Calibri",sans-serif;font-weight:normal'>    </span>Introduction.............................................................................................................................. 1</p>

<p class=MsoToc2>1.1<span style='font-family:"Calibri",sans-serif'>         </span>Purpose............................................................................................................................. 1</p>

<p class=MsoToc2>1.2<span style='font-family:"Calibri",sans-serif'>         </span>System
Overview.............................................................................................................. 1</p>

<p class=MsoToc1>2.<span style='font-size:11.0pt;font-family:"Calibri",sans-serif;
font-weight:normal'>    </span>Overall System Design............................................................................................................. 1</p>

<p class=MsoToc2>2.1<span style='font-family:"Calibri",sans-serif'>         </span>Design
Constraints............................................................................................................ 1</p>

<p class=MsoToc2>2.2<span style='font-family:"Calibri",sans-serif'>         </span>System
Architecture.......................................................................................................... 1</p>

<p class=MsoToc3>2.2.1<span style='font-family:"Calibri",sans-serif'>     </span>Use
case model............................................................................................................. 1</p>

<p class=MsoToc3>2.2.2<span style='font-family:"Calibri",sans-serif'>     </span>Class
diagram............................................................................................................... 3</p>

<p class=MsoToc3>2.2.3<span style='font-family:"Calibri",sans-serif'>     </span>Squence
diagram.......................................................................................................... 4</p>

<p class=MsoToc2>2.3<span style='font-family:"Calibri",sans-serif'>         </span>Database
Design............................................................................................................... 5</p>

<p class=MsoToc3>2.3.1<span style='font-family:"Calibri",sans-serif'>     </span>Description................................................................................................................... 5</p>

<p class=MsoToc2>2.4<span style='font-family:"Calibri",sans-serif'>         </span>Hardware
and Software Design........................................................................................ 5</p>

<p class=MsoToc3>2.4.1<span style='font-family:"Calibri",sans-serif'>     </span>System
Software Design............................................................................................... 5</p>

<p class=MsoToc3>2.4.2<span style='font-family:"Calibri",sans-serif'>     </span>System
Hardware Design.............................................................................................. 7</p>

<p class=MsoToc2>2.5<span style='font-family:"Calibri",sans-serif'>         </span>Graphical
User Interface Design....................................................................................... 7</p>

<p class=MsoToc3>2.5.1<span style='font-family:"Calibri",sans-serif'>     </span>Home
page prototype................................................................................................... 7</p>

<p class=MsoToc3>2.5.2<span style='font-family:"Calibri",sans-serif'>     </span>Login/Register
page prototype...................................................................................... 8</p>

<p class=MsoToc2>2.6<span style='font-family:"Calibri",sans-serif'>         </span>System
Quality Attributes............................................................................................... 11</p>

<p class=MsoToc3>2.6.1<span style='font-family:"Calibri",sans-serif'>     </span>Security...................................................................................................................... 11</p>

<p class=MsoToc3>2.6.2<span style='font-family:"Calibri",sans-serif'>     </span>Performance............................................................................................................... 11</p>

<p class=MsoNormal><span style='font-family:"Times New Roman",serif'><b>&nbsp;</b></span></p>

<p class=MsoNormal><b><span style='font-family:"Times New Roman",serif'>&nbsp;</span></b></p>

<p class=TOCEntry>Revision History</p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none'>
 <tr>
  <td width=144 valign=top style='width:1.5in;border-top:solid 1.5pt;
  border-left:solid 1.5pt;border-bottom:double 4.5pt;border-right:solid 1.0pt;
  border-color:windowtext;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0in;margin-bottom:
  2.0pt;margin-left:0in'><b>Name</b></p>
  </td>
  <td width=78 valign=top style='width:58.5pt;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:double windowtext 4.5pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0in;margin-bottom:
  2.0pt;margin-left:0in'><b>Date</b></p>
  </td>
  <td width=330 valign=top style='width:247.7pt;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:double windowtext 4.5pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0in;margin-bottom:
  2.0pt;margin-left:0in'><b>Reason For Changes</b></p>
  </td>
  <td width=106 valign=top style='width:1.1in;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:double windowtext 4.5pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0in;margin-bottom:
  2.0pt;margin-left:0in'><b>Version</b></p>
  </td>
 </tr>
 <tr>
  <td width=144 valign=top style='width:1.5in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0in;margin-bottom:
  2.0pt;margin-left:0in'>&nbsp;</p>
  </td>
  <td width=78 valign=top style='width:58.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0in;margin-bottom:
  2.0pt;margin-left:0in'>&nbsp;</p>
  </td>
  <td width=330 valign=top style='width:247.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0in;margin-bottom:
  2.0pt;margin-left:0in'>&nbsp;</p>
  </td>
  <td width=106 valign=top style='width:1.1in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0in;margin-bottom:
  2.0pt;margin-left:0in'>&nbsp;</p>
  </td>
 </tr>
 <tr>
  <td width=144 valign=top style='width:1.5in;border-top:none;border-left:solid windowtext 1.5pt;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0in;margin-bottom:
  2.0pt;margin-left:0in'>&nbsp;</p>
  </td>
  <td width=78 valign=top style='width:58.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0in;margin-bottom:
  2.0pt;margin-left:0in'>&nbsp;</p>
  </td>
  <td width=330 valign=top style='width:247.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0in;margin-bottom:
  2.0pt;margin-left:0in'>&nbsp;</p>
  </td>
  <td width=106 valign=top style='width:1.1in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0in;margin-bottom:
  2.0pt;margin-left:0in'>&nbsp;</p>
  </td>
 </tr>
</table>

<p class=MsoNormal><b>&nbsp;</b></p>

<p class=MsoNormal>&nbsp;</p>

</div>

<span style='font-size:12.0pt;font-family:"Times",serif'><br clear=all
style='page-break-before:always'>
</span>

<div class=WordSection3>

<h1 style='margin-left:0in;text-indent:0in'><a name="_Toc510629808"></a><a
name="_Toc439994665">1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span><span dir=LTR></span>Introduction</a></h1>

<h2 style='margin-left:0in;text-indent:0in'><a name="_Toc510629809"></a><a
name="_Toc439994667">1.1<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span><span dir=LTR></span>Purpose</a> </h2>

<p class=template style='text-align:justify'><span style='font-style:normal'>The
purpose of this document is to present a detailed description of the
HZElectronics store, created for allowing all electronics manufacturers and
providers to reach wide range of customers around the world. Firstly this
document is created for developers to use the designs and guidelines to
implement the project, and for the designers who try to upgrade of modify the
present design of the store system.</span></p>

<h2 style='margin-left:0in;text-indent:0in'><a name="_Toc510629810">1.2<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span><span
dir=LTR></span>System Overview</a></h2>

<p class=template><span style='font-style:normal'>Sections 2 contain
discussions of the designs for the project with diagrams, section 6 shows
samples of UI from the system, and section 7 contains the class diagrams. The appendices
contain the setup and configuration needed for the GUIS, a list of functions
that are implemented in this version, and that are to be implemented in future
version, and a list of tools and environment used in the entire project.</span></p>

<p class=template>&nbsp;</p>

<h1 style='margin-left:0in;text-indent:0in'><a name="_Toc510629811"></a><a
name="_Toc439994673">2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span><span dir=LTR></span>Overall </a>System Design</h1>

<h2 style='margin-left:0in;text-indent:0in'><a name="_Toc510629812">2.1<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span><span
dir=LTR></span>Design Constraints</a></h2>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'><span style='font-style:normal'>The
HZ electronics is implemented on the web so it can only be accessed by web
browsers and the availability of the internet access.</span></p>

<p class=template style='text-align:justify'>&nbsp;</p>

<h2 style='margin-left:0in;text-indent:0in'><a name="_Toc510629813">2.2<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span><span
dir=LTR></span>System Architecture</a></h2>

<h3 style='margin-left:0in;text-indent:0in'><a name="_Toc510629814">2.2.1<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span><span
dir=LTR></span>Use case model</a></h3>

<p class=template><span style='font-style:normal'>There are three actors that
interact with the system: the customer, the payment platform and the system
(Figure 3.1). The customer can either be an anonymous customer or an identified
customer previously existing in the HZelectronics platform.</span></p>

<p class=template><span style='font-style:normal'>&nbsp;</span></p>

<p class=template><span style='font-style:normal'>&nbsp;</span></p>

<p class=template><span style='font-style:normal'>&nbsp;</span></p>

<p class=MsoNormal style='line-height:normal;text-autospace:none'><span
style='font-size:11.0pt;font-family:"Georgia",serif'>The use cases for
displaying products are shown below. The customer can either list a set of
products or display a particular product.</span></p>

<p class=MsoNormal style='line-height:normal;text-autospace:none'><span
style='font-size:11.0pt;font-family:"Georgia",serif'>&nbsp;</span></p>

<p class=MsoNormal style='line-height:normal;text-autospace:none'><img
width=517 height=459 src="/hz-store/HZElectronics%20SDS_files/use_case.png" align=left
hspace=12></p>

<p class=MsoNormal style='line-height:normal;text-autospace:none'><span
style='font-size:11.0pt;font-family:"Georgia",serif'>&nbsp;</span></p>

<p class=MsoNormal style='line-height:normal;text-autospace:none'><span
style='font-size:11.0pt;font-family:"Georgia",serif'>&nbsp;</span></p>

<p class=MsoNormal style='line-height:normal;text-autospace:none'><span
style='font-size:11.0pt;font-family:"Georgia",serif'>&nbsp;</span></p>

<p class=MsoNormal style='line-height:normal;text-autospace:none'><span
style='font-size:11.0pt;font-family:"Georgia",serif'>&nbsp;</span></p>

<p class=MsoNormal style='line-height:normal;text-autospace:none'><span
style='font-size:11.0pt;font-family:"Georgia",serif'>&nbsp;</span></p>

<p class=MsoNormal style='line-height:normal;text-autospace:none'><span
style='font-size:11.0pt;font-family:"Georgia",serif'>&nbsp;</span></p>

<p class=MsoNormal style='line-height:normal;text-autospace:none'><span
style='font-size:11.0pt;font-family:"Georgia",serif'>&nbsp;</span></p>

<p class=MsoNormal style='line-height:normal;text-autospace:none'><span
style='font-size:11.0pt;font-family:"Georgia",serif'>&nbsp;</span></p>

<p class=MsoNormal style='line-height:normal;text-autospace:none'><span
style='font-size:11.0pt;font-family:"Georgia",serif'>&nbsp;</span></p>

<p class=MsoNormal style='line-height:normal;text-autospace:none'><span
style='font-size:11.0pt;font-family:"Georgia",serif'>&nbsp;</span></p>

<p class=MsoNormal style='line-height:normal;text-autospace:none'><span
style='font-size:11.0pt;font-family:"Georgia",serif'>&nbsp;</span></p>

<p class=MsoNormal style='line-height:normal;text-autospace:none'><span
style='font-size:11.0pt;font-family:"Georgia",serif'>&nbsp;</span></p>

<p class=MsoNormal style='line-height:normal;text-autospace:none'><span
style='font-size:11.0pt;font-family:"Georgia",serif'>&nbsp;</span></p>

<p class=MsoNormal style='line-height:normal;text-autospace:none'><span
style='font-size:11.0pt;font-family:"Georgia",serif'>&nbsp;</span></p>

<p class=MsoNormal style='line-height:normal;text-autospace:none'><span
style='font-size:11.0pt;font-family:"Georgia",serif'>&nbsp;</span></p>

<p class=MsoNormal style='line-height:normal;text-autospace:none'><span
style='font-size:11.0pt;font-family:"Georgia",serif'>&nbsp;</span></p>

<p class=MsoNormal style='line-height:normal;text-autospace:none'><span
style='font-size:11.0pt;font-family:"Georgia",serif'>&nbsp;</span></p>

<p class=MsoNormal style='line-height:normal;text-autospace:none'><span
style='font-size:11.0pt;font-family:"Georgia",serif'>Figure 3.4 shows the use
cases related to purchasing products. They can be clearly divided into two
different topics: on the one hand all those use cases for managing the shopping
cart (i.e. adding, updating and removing items), on the other hand those
related to placing and listing orders. When placing an order the customer may
be requested to pay online, in which case the payment platform will provide the
necessary means. Anonymous as much as registered customers can place orders,
but only customers that have been identified are able to list their own orders,
otherwise they are requested to identify themselves.</span></p>

<p class=MsoNormal style='line-height:normal;text-autospace:none'><span
style='font-size:11.0pt;font-family:"Georgia",serif'>&nbsp;</span></p>

<p class=MsoNormal style='line-height:normal;text-autospace:none'>

<table cellpadding=0 cellspacing=0 align=left>
 <tr>
  <td width=98 height=0></td>
 </tr>
 <tr>
  <td></td>

 </tr>
</table>

<br clear=ALL>
</p>

<p class=MsoNormal style='line-height:normal;text-autospace:none'><span
style='font-size:11.0pt;font-family:"Georgia",serif'>&nbsp;</span></p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template><span style='font-style:normal'>For the use cases related to
account management (Figure 3.5), a registered customer can manage his address
book (i.e. add, update or remove postal addresses) or update his account (i.e.
change his personal data or password). He can as well decide to log out from
the system and become an anonymous customer. As an anonymous customer, he can
sign up a new account or log in with an existing one. In case he cannot
remember his credentials, he will be given the option to recover his password.</span></p>

<p class=template><span style='font-style:normal'>&nbsp;</span></p>

<p class=template>

<table cellpadding=0 cellspacing=0 align=left>
 <tr>
  <td width=98 height=0></td>
 </tr>
 <tr>
  <td></td>

 </tr>
</table>

<br clear=ALL>
</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<h3 style='margin-left:0in;text-indent:0in'><a name="_Toc510629815">2.2.2<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span><span
dir=LTR></span>Class diagram</a></h3>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template><span style='font-style:normal'>Products are related to carts
as a list of product variants, forming line items. Variant is a concept to
define the part of the product that contains the particular characteristics of
it, such as color or size, even having sometimes a different price. Therefore every
product has at least one variant, each one with different price or attributes.</span></p>

<p class=template><span style='font-style:normal'>Similarly, a cart can be
associated with one of the shipping methods available in the system, resulting
in a shipping item, necessary to manage taxes. Both products and shipping
methods have a particular tax category that can be variable for products and
fixed in the case of shipping. When one of these elements are added to the
cart, a tax rate is assigned to the item according to this tax category and the
shipping address of the cart.</span></p>

<p class=template><span style='font-style:normal'>As mentioned above carts can
have a shipping address, but can have as well a billing address.</span></p>

<p class=template><span style='font-style:normal'>A cart can belong to a
registered customer, otherwise it is considered to have an anonymous customer.
Once the checkout is finished a cart becomes an order, with information about
the current payment, shipping and order status. If the customer was not
anonymous, this order will be associated with that customer, along with any of
his previous orders. Every customer can also have a list of addresses
comprising the address book.</span></p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>

<table cellpadding=0 cellspacing=0 align=left>
 <tr>
  <td width=54 height=0></td>
 </tr>
 <tr>
  <td></td>
  <td><img width=410 height=349 src="/hz-store/HZElectronics%20SDS_files/hz_class.png"></td>
 </tr>
</table>

<br clear=ALL>
</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<h3 style='margin-left:0in;text-indent:0in'><a name="_Toc510629816">2.2.3<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span><span
dir=LTR></span>Squence diagram</a></h3>

<p class=MsoNormal><img width=382 height=263
src="/hz-store/HZElectronics%20SDS_files/image005.gif" align=left hspace=12></p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal><img width=370 height=286
src="/hz-store/HZElectronics%20SDS_files/image006.gif" align=left hspace=12></p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><img width=378 height=242
src="/hz-store/HZElectronics%20SDS_files/image007.gif" align=left hspace=12></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<h2 style='margin-left:0in;text-indent:0in'><a name="_Toc510629817">2.3<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span><span
dir=LTR></span>Database Design</a></h2>

<h3 style='margin-left:0in;text-indent:0in'><a name="_Toc510629818">2.3.1<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span><span
dir=LTR></span>Description</a></h3>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template><span style='font-style:normal'>MySQL database and JDBC to
communicate with the database that is installed locally on</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>the
server</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<h2 style='margin-left:0in;text-indent:0in'><a name="_Toc510629819">2.4<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span><span
dir=LTR></span>Hardware and Software Design</a></h2>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<h3 style='margin-left:0in;text-indent:0in'><a name="_Toc510629820">2.4.1<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span><span
dir=LTR></span>System Software Design</a></h3>

<p class=template><span style='font-style:normal'>The software architecture of
the system is designed after the MVC (Model-View-Controller) architectural
pattern, which is widely used in web applications design. Its use in this
project is required, since MVC is the architecture pattern followed by Laravel
Framework, the web framework on which Laravel SDK has been developed.</span></p>

<p class=template><span style='font-style:normal'>&nbsp;</span></p>

<p class=template><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'> </span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><img width=533 height=362
src="/hz-store/HZElectronics%20SDS_files/Arch.PNG" align=left hspace=12></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template><span style='font-style:normal'>When the request reaches the
web application server, a routing system analyzes the HTTP request and invokes
a particular action of the corresponding controller. Then the controller interprets
all required input parameters coming from the user and requests the appropriate
changes to the model. In the model, HZelectronics.com Laravel SDK executes the
request, which usually involves communication with the HZelectronics.com backend
in order to create, read, update or delete some of the stored data.</span></p>

<p class=template><span style='font-style:normal'>&nbsp;</span></p>

<p class=template><span style='font-style:normal'>Once the model finishes
processing the request, the controller selects the appropriate template and
sends all information related to the current request to the view. With this
information and some other obtained directly from the model, the view generates
a HTML document that is sent back to the client via a HTTP response.</span></p>

<p class=template><span style='font-style:normal'>&nbsp;</span></p>

<p class=template><span style='font-style:normal'>With this design, a new whole
web page must be loaded from the server every time the user wants to interact
with the system. This is known as a “thin client” design, because all the logic
is located in the server, leaving the client with the only task of rendering
the web page. In comparison with that, a “fat client” hosts all the logic of
the system; hence Controller, View and Model are located on the client side,
leaving in the server just those parts of the Model responsible for the
security and management of persistence.</span></p>

<p class=template><span style='font-style:normal'>&nbsp;</span></p>

<p class=template><span style='font-style:normal'>&nbsp;</span></p>

<p class=template><span style='font-style:normal'>&nbsp;</span></p>

<p class=template><span style='font-style:normal'>&nbsp;</span></p>

<p class=template><span style='font-style:normal'>&nbsp;</span></p>

<p class=template><span style='font-style:normal'>&nbsp;</span></p>

<p class=template><span style='font-style:normal'>&nbsp;</span></p>

<p class=template><span style='font-style:normal'>&nbsp;</span></p>

<p class=template><span style='font-style:normal'>&nbsp;</span></p>

<p class=template><span style='font-style:normal'>&nbsp;</span></p>

<p class=template><span style='font-style:normal'>&nbsp;</span></p>

<p class=template><span style='font-style:normal'>&nbsp;</span></p>

<p class=template><span style='font-style:normal'>&nbsp;</span></p>

<p class=template><span style='font-style:normal'>&nbsp;</span></p>

<p class=template><span style='font-style:normal'>&nbsp;</span></p>

<p class=template><span style='font-style:normal'>&nbsp;</span></p>

<p class=template><span style='font-style:normal'>&nbsp;</span></p>

<p class=template><span style='font-style:normal'>&nbsp;</span></p>

<p class=template><span style='font-style:normal'>&nbsp;</span></p>

<p class=template><span style='font-style:normal'>&nbsp;</span></p>

<h3 style='margin-left:0in;text-indent:0in'><a name="_Toc510629821">2.4.2<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span><span
dir=LTR></span>System Hardware Design</a></h3>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal><img width=275 height=241
src="/hz-store/HZElectronics%20SDS_files/image009.jpg" align=left hspace=12></p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=template><span style='font-style:normal'>The designed system follows a
client-server architecture with three tiers: the client, the web application
server and the data server tier. The data tier corresponds to the HZelectronics.com
backend.</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template><span style='font-style:normal'>The communication between the
web application and the HZelectronics.com backend is always held with HTTPS as
a requirement of the online shop platform.</span></p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<h2 style='margin-left:0in;text-indent:0in'><a name="_Toc510629822">2.5<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span><span
dir=LTR></span>Graphical User Interface Design</a></h2>

<p class=template style='text-align:justify'>&nbsp;</p>

<h3 style='margin-left:0in;text-indent:0in'><a name="_Toc510629823">2.5.1<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span><span
dir=LTR></span>Home page prototype</a></h3>

<p class=template style='text-align:justify;text-indent:.5in'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'><a href="{{route('home')}}"> <h3> Home As seen here </h3></a></p>
<iframe src="{{route('home')}}" frameborder="0" height="496" width="100%" class="preview-iframe"></iframe>


<p class=template style='text-align:justify'><span style='font-style:normal'>In
home page, new user can list items and register, and customers can login/logout
and go to manage account</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<h3 style='margin-left:0in;text-indent:0in'><a name="_Toc510629824">2.5.2<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span><span
dir=LTR></span>Login/Register page prototype</a></h3>

<p class=template style='text-align:justify;text-indent:.5in'><span
style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'>&nbsp;</p>


<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'><span style='font-style:normal'>In
register new users have to enter username, password, repeat password, and
email, to access more functions of HZ electronics.</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>Returned
customers have to login by entering username and password.</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>
<p class=template style='text-align:justify'><a href="{{route('login')}}"> <h3> Login As seen here </h3></a></p>
<iframe src="{{route('login')}}" frameborder="0" height="496" width="100%" class="preview-iframe"></iframe>


<p class=template style='text-align:justify'><a href="{{route('register')}}"> <h3> Register As seen here </h3></a></p>
<iframe src="{{route('register')}}" frameborder="0" height="496" width="100%" class="preview-iframe"></iframe>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify;text-indent:.5in'><b><span
style='font-style:normal'>&nbsp;</span></b></p>

<p class=template style='text-align:justify;text-indent:.5in'><b><span
style='font-style:normal'>5.2.3 Checkout page prototype</span></b></p>

<p class=template style='text-align:justify'><b><span style='font-style:normal'>&nbsp;</span></b></p>

<p class=template style='text-align:justify'><a href="{{route('checkout')}}"> <h3> Checkout As seen here </h3></a></p>

<iframe src="{{route('checkout')}}" frameborder="0" height="496" width="100%" class="preview-iframe"></iframe>

<p class=template style='text-align:justify;text-indent:.5in'><span
style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify;text-indent:.5in'><span
style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'><span style='font-style:normal'>In
checkout page it will show you the cart contents and details for each item,
name, and price.</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>Customer
has to enter  address details and click &quot;place your order&quot;
button.</span></p>
<p class=template style='text-align:justify'><span style='font-style:normal'> </span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>Unregistered customers
also can place orders without making an account </span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'> </span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<p class=template style='text-align:justify'>&nbsp;</p>

<h2 style='margin-left:0in;text-indent:0in'><a name="_Toc510629825">2.6<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span><span
dir=LTR></span>System Quality Attributes</a></h2>

<h3 style='margin-left:0in;text-indent:0in'><a name="_Toc510629826">2.6.1<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span><span
dir=LTR></span>Security</a></h3>

<p class=template style='text-align:justify'><span style='font-style:normal'>Using
HTTPS hosting with an SSL certificate is generally for the payment area of the
store.</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>Customer
has to enter email to confirm registration and reset password and the website
will remember it.</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>Secure
admin panel.</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>Client
credit card date are encrypted on the database.</span></p>

<p class=template style='text-align:justify'><span style='font-style:normal'>&nbsp;</span></p>

<h3 style='margin-left:0in;text-indent:0in'><a name="_Toc510629827">2.6.2<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span><span
dir=LTR></span>Performance</a></h3>

<p class=template style='text-align:justify'><span style='font-style:normal'>The
website is lightweight and lag free when doing have tasks.</span></p>

<p class=template>&nbsp;</p>

</div>

    </div>


    @endsection