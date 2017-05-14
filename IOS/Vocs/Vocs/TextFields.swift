//
//  VCTextFields.swift
//  Vocs
//
//  Created by Mathis Delaunay on 13/05/2017.
//  Copyright © 2017 Wathis. All rights reserved.
//

import UIKit

class VCTextFieldTraduction : UITextField {

    let separatorLine : UIView = {
        let view = UIView()
        view.translatesAutoresizingMaskIntoConstraints = false
        view.backgroundColor = UIColor(rgb: 0x95989A)
        return view
    }()
    
    init() {
        super.init(frame: CGRect(x: 0, y: 0, width: 0, height: 0))
        self.placeholder = ""
        self.font = UIFont (name: "HelveticaNeue-Bold", size: 20)
        self.textColor = UIColor(rgb: 0x696969)
        self.translatesAutoresizingMaskIntoConstraints = false
        self.spellCheckingType = .no
        self.autocorrectionType = .no
        self.textAlignment = .center
        setupViews()
    }
    
    func setupViews() {
        self.addSubview(separatorLine)
        separatorLine.topAnchor.constraint(equalTo: self.bottomAnchor).isActive = true
        separatorLine.heightAnchor.constraint(equalToConstant: 2).isActive = true
        separatorLine.widthAnchor.constraint(equalTo: self.widthAnchor).isActive = true
        separatorLine.centerXAnchor.constraint(equalTo: self.centerXAnchor).isActive = true
    }
    
    required init?(coder aDecoder: NSCoder) {
        fatalError("init(coder:) has not been implemented")
    }

}
