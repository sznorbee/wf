ALTER TABLE person_address
ADD CONSTRAINT pap
FOREIGN KEY (Personid) 
REFERENCES Person(id);

ALTER TABLE person_address
ADD CONSTRAINT paa
FOREIGN KEY (Addressid)
REFERENCES Address(id);

ALTER TABLE person_address
ADD CONSTRAINT paat
FOREIGN KEY (Address_typeid)
REFERENCES Address_type(id);