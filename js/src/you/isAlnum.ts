export const isAlnum = (input: string): boolean => !!input.match(/^[a-zA-Z0-9]*$/);


export const allIsAlnum = (input: string[]): boolean => {
    for(const a of input) {
        if(!isAlnum(a)) {
            return false;
        }
    }

    return true;
}
