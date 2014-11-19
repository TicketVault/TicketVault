//
//  web_crawler
//  
//
//  Created by HuangHanxun on 14/11/17.
//
//

import Foundation
//Setup baseurl
var i = 0;
var baseurl = "https://boilerlink.purdue.edu/Organizations?SearchType=None&SelectedCategoryId=0&CurrentPage="
var index = 0
var targeturl:String
var key = "target="+"\u{0022}"+"_self"+"\u{0022}"+">"
let myRegex = "[t][a][r][g][e][t][=][\u{0022}][_][s][e][l][f][\u{0022}][>](.){1,}[>]"
var key_length = countElements(key)
var j = 0;
var m = 0;
var error:NSError?
//println(key)
for(i=1;i<103;i++){
    index = i
    targeturl = baseurl + String(index)
    println(targeturl)
    let targeturl_NSURL = NSURL(string:targeturl);
    let data = NSData(contentsOfURL: targeturl_NSURL!, options: nil, error: nil)
    var datastring_NSString = NSString(data: data!, encoding: NSUTF8StringEncoding)
    //println(datastring_NSString)
    var datastring = String(datastring_NSString!)
    var data_string_length = countElements(datastring)
    while var match = datastring.rangeOfString(myRegex, options: .RegularExpressionSearch){
        println(datastring[match])
        datastring.replaceRange(match, with: " ")
    }
}
/*
let myStringToBeMatched = "ThisIsMyString ThisIsMyString"
let myRegex = "ing"
if var match = myStringToBeMatched.rangeOfString(myRegex, options: .RegularExpressionSearch){
    println("\(myStringToBeMatched) is matching!")
    println(myStringToBeMatched[match])
}*/
