function Calculatrice(ConteneurId)
{
	this._structureHtml = {};
	this._conteneurId = '';

	/*
	* Constructeur de la classe
	*/
	this.Construct = function(ConteneurId)
	{
		this._conteneurId = ConteneurId;
		this.StructureDefinir();
		this.HtmlCreer();
	};
	
	this.StructureDefinir = function()
	{
		this._structureHtml = {
			'tableCalc' : {
				'tag' : 'table',
				'children' : {
					'trEntete' : {
						'tag' : 'tr',
						'children' : {
							'tdEffacer' : {
								'tag' : 'th',
								'children' : {
									'btnEffacer' : {
										'tag': 'button',
										'innerHTML' : 'Effacer'
									}
								},
								
							},
							'tdCalc' : {
								'tag' : 'th',
								'children' : {
									'iptCalc' : {
										'tag' : 'input',
										'attributes' : {
											'placeholder' : '0'
										}
									}
								},
								'attributes' : {
									'colspan' : '3'
								}
							},
						}
					},
					'tr0' : {
						'tag' : 'tr',
						'children' : {
							'tdModulo' : {
								'tag' : 'td',
								'children' : {
									'btnModulo' : {
										'tag' : 'button',
										'innerHTML' : '%'
									}
								}
							},
							'tdCarre' : {
								'tag' : 'td',
								'children' : {
									'btnCarre' : {
										'tag' : 'button',
										'innerHTML' : 'x2'
									}
								}
							},
							'tdRacine' : {
								'tag' : 'td',
								'children' : {
									'btnRacine' : {
										'tag' : 'button',
										'innerHTML' : '√'
									}
								}
							},
							'tdDiviser' : {
								'tag' : 'td',
								'children' : {
									'btnDiviser' : {
										'tag' : 'button',
										'innerHTML' : '÷'
									}
								}
							}
						}
					},
					'tr1' : {
						'tag' : 'tr',
						'children' : {
							'tdSept' : {
								'tag' : 'td',
								'children' : {
									'btnSept' : {
										'tag' : 'button',
										'innerHTML' : '7'
									}
								}
							},
							'tdhuit' : {
								'tag' : 'td',
								'children' : {
									'btnHuit' : {
										'tag' : 'button',
										'innerHTML' : '8'
									}
								}
							},
							'tdneuf' : {
								'tag' : 'td',
								'children' : {
									'btnNeuf' : {
										'tag' : 'button',
										'innerHTML' : '9'
									}
								}
							},
							'tdX' : {
								'tag' : 'td',
								'children' : {
									'btnX' : {
										'tag' : 'button',
										'innerHTML' : 'X'
									}
								}
							}
						}
					},
					'tr2' : {
						'tag' : 'tr',
						'children' : {
							'tdQuatre' : {
								'tag' : 'td',
								'children' : {
									'btnquatre' : {
										'tag' : 'button',
										'innerHTML' : '4'
									}
								}
							},
							'tdCinq' : {
								'tag' : 'td',
								'children' : {
									'btnCinq' : {
										'tag' : 'button',
										'innerHTML' : '5'
									}
								}
							},
							'tdSix' : {
								'tag' : 'td',
								'children' : {
									'btnSix' : {
										'tag' : 'button',
										'innerHTML' : '6'
									}
								}
							},
							'tdTiret' : {
								'tag' : 'td',
								'children' : {
									'btnTiret' : {
										'tag' : 'button',
										'innerHTML' : '-'
									}
								}
							}
						}
					},
					'tr3' : {
						'tag' : 'tr',
						'children' : {
							'tdUn' : {
								'tag' : 'td',
								'children' : {
									'btnUn' : {
										'tag' : 'button',
										'innerHTML' : '1'
									}
								}
							},
							'tdDeux' : {
								'tag' : 'td',
								'children' : {
									'btndeux' : {
										'tag' : 'button',
										'innerHTML' : '2'
									}
								}
							},
							'tdTrois' : {
								'tag' : 'td',
								'children' : {
									'btnTrois' : {
										'tag' : 'button',
										'innerHTML' : '3'
									}
								}
							},
							'tdPlus' : {
								'tag' : 'td',
								'children' : {
									'btnPlus' : {
										'tag' : 'button',
										'innerHTML' : '+'
									}
								}
							}
						}
					},
					'tr4' : {
						'tag' : 'tr',
						'children' : {
							'tdPlusMoin' : {
								'tag' : 'td',
								'children' : {
									'btnPlusMoin' : {
										'tag' : 'button',
										'innerHTML' : '+/-'
									}
								}
							},
							'tdZero' : {
								'tag' : 'td',
								'children' : {
									'btnZero' : {
										'tag' : 'button',
										'innerHTML' : '0'
									}
								}
							},
							'tdVirgule' : {
								'tag' : 'td',
								'children' : {
									'btnVirgule' : {
										'tag' : 'button',
										'innerHTML' : ','
									}
								}
							},
							'tdEgal' : {
								'tag' : 'td',
								'children' : {
									'btnEgal' : {
										'tag' : 'button',
										'innerHTML' : '='
									}
								}
							}
						}
					}
				}
			}
		}
	};

	this.HtmlCreer = function()
	{
		let conteneur = document.getElementById(this._conteneurId);
		for (let elementId in this._structureHtml) {
			
			let childElement = this.HtmlElementCreer(this._structureHtml, elementId);
			conteneur.appendChild(childElement);
		}		
	};
	
	this.HtmlElementCreer = function(StructureHtml, ElementId)
	{
		let tagName = StructureHtml[ElementId]['tag'];
		let element = document.createElement(tagName);
		element.id = ElementId;

		let properties = StructureHtml[ElementId];

		for (let propertyName in properties) {
	
			switch (propertyName){

				case 'innerHTML' :
					element.innerHTML = properties['innerHTML'];
					break;

				case 'attributes' :
					
					for (let propertyName in properties['attributes']) {
						element.setAttribute(propertyName, properties['attributes'][propertyName]);
					}
					break;
					
				case 'children' :

					for (let childrenId in properties['children']) {
						let childElement = this.HtmlElementCreer(properties['children'], childrenId);
						
						element.appendChild(childElement);
					}
					break;
			}
		}
		
		return element;
	};


	this.Construct(ConteneurId);
}
