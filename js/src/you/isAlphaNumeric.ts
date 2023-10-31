export const isAlphaNumeric = (input: string): boolean => !!input.match(/^[a-zA-Z0-9]*$/);


export const allIsAlphaNumeric = (input: string[]): boolean => {
    for(const a of input) {
        if(!isAlphaNumeric(a)) {
            return false;
        }
    }

    return true;
}
